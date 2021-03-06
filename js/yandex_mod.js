function init() {
    var myMap = new ymaps.Map('map', {
            center: [60.906882, 30.067233],
            zoom: 9,
            type: 'yandex#map',
            behaviors: ['scrollZoom', 'drag']
        }),
        search = new ymaps.control.SearchControl({
            useMapBounds: true,
            noCentering: true,
            noPlacemark: true
        }),
        calculator = new DeliveryCalculator(myMap, myMap.getCenter());

    myMap.controls.add(search, { right: 5, top: 5 });

    search.events.add('resultselect', function (e) {
        var results = search.getResultsArray(),
            selected = e.get('resultIndex'),
            point = results[selected].geometry.getCoordinates();

        calculator.setStartPoint(point);
    });
}

function DeliveryCalculator(map, finish) {
    this._map = map;
    this._start = null;
    this._finish = new ymaps.Placemark(finish, { iconContent: 'Б' });
    this._route = null;

    map.events.add('click', this._onClick, this);
    map.geoObjects.add(this._finish);
}

var ptp = DeliveryCalculator.prototype;

ptp._onClick= function (e) {
    this.setStartPoint(e.get('coordPosition'));
};

ptp._onDragEnd = function (e) {
    var target = e.get('target');
    this.setStartPoint(target.geometry.getCoordinates());
}

ptp.getDirections = function () {
    var self = this,
        start = this._start.geometry.getCoordinates(),
        finish = this._finish.geometry.getCoordinates();

    if(this._route) {
        this._map.geoObjects.remove(this._route);
    }

    ymaps.geocode(start, { results: 1 })
        .then(function (geocode) {
            var address = geocode.geoObjects.get(0) &&
                geocode.geoObjects.get(0).properties.get('balloonContentBody') || '';

            ymaps.route([start, finish])
                .then(function (router) {
                    var distance = Math.round(router.getLength() / 1000),
                        message = '<span>Расстояние: ' + distance + 'км.</span><br/>' +
                            '<span style="font-weight: bold; font-style: italic">Стоимость доставки: %sр.</span>';

                    self._route = router.getPaths();
                    self._route.options.set({ strokeWidth: 5, strokeColor: '0000ffff', opacity: 0.5 });
                    self._map.geoObjects.add(self._route);
                    self._start.properties.set('balloonContentBody', address + message.replace('%s', self.calculate(distance)));
                    self._start.balloon.open();
                });
        });
};

ptp.setStartPoint = function (position) {
    if(this._start) {
        this._start.geometry.setCoordinates(position);
    }
    else {
        this._start = new ymaps.Placemark(position, { iconContent: 'А' }, { draggable: true });
        this._start.events.add('dragend', this._onDragEnd, this);
        this._map.geoObjects.add(this._start);
    }
    this.getDirections();
};

ptp.calculate = function (len) {
    // Константы.
    var DELIVERY_TARIF = 20,
        MINIMUM_COST = 500;

    return Math.max(len * DELIVERY_TARIF, MINIMUM_COST);
};

ymaps.ready(init);

