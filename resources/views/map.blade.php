<x-app-layout>
    <div id="map" class="h-full"></div>

    @push('styles')
        <link rel="stylesheet" href="/leaflet.css">
    @endpush
    @push('scripts')
        <script src="/leaflet.js"></script>
    @endpush


    <style>
        .legend {
            background-color: #ffffff;
            border: 1px solid #ccc;
            padding: 10px;
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: black;
            display: flex;
            align-items: center;
        }

        .legend i {
            display: inline-block;
            width: 1rem;
            height: 1rem;
            margin-right: 0.25rem;
        }

        .legend p:not(:last-child) {
            margin-right: 0.5rem;
        }
    </style>

    <script>
        const map = L.map('map').setView([5, 97.2], 10);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        const coordinates = {
            'Sawang': {
                lat: 5.1305,
                long: 96.889417,
            },
            'Nisam': {
                lat: 5.170808,
                long: 97.008776,
            },
            'Banda Baro': {
                lat: 5.186765,
                long: 96.952451,
            },
            'Kuta Makmur': {
                lat: 5.098178,
                long: 97.047667,
            },
            'Simpang Keramat': {
                lat: 5.041196,
                long: 97.081045,
            },
            'Syamtalira Bayu': {
                lat: 5.077278,
                long: 97.183739,
            },
            'Geureudong Pase': {
                lat: 5.000212,
                long: 97.113878,
            },
            'Meurah Mulia': {
                lat: 5.069072,
                long: 97.206910,
            },
            'Matangkuli': {
                lat: 5.031402,
                long: 97.272129,
            },
            'Paya Bakong': {
                lat: 4.977012,
                long: 97.234648,
            },
            'Pirak Timu': {
                lat: 4.994652,
                long: 97.281426,
            },
            'Cot Girek': {
                lat: 4.931239,
                long: 97.360054,
            },
            'Tanah Jambo Aye': {
                lat: 5.117777,
                long: 97.452895,
            },
            'Langkahan': {
                lat: 4.882899,
                long: 97.433189,
            },
            'Seunuddon': {
                lat: 5.193151,
                long: 97.429050,
            },
            'Baktiya': {
                lat: 5.130517,
                long: 97.411324,
            },
            'Baktiya Barat': {
                lat: 5.119549,
                long: 97.350669,
            },
            'Lhoksukon': {
                lat: 5.038828,
                long: 97.326874,
            },
            'Tanah Luas': {
                lat: 5.006408,
                long: 97.214207,
            },
            'Nibong': {
                lat: 5.066492,
                long: 97.246259,
            },
            'Samudera': {
                lat: 5.115771,
                long: 97.217315,
            },
            'Syamtalira Aron': {
                lat: 5.102005,
                long: 97.253846,
            },
            'Tanah Pasir': {
                lat: 5.138316,
                long: 97.260414,
            },
            'Lapang': {
                lat: 5.148549,
                long: 97.293902,
            },
            'Muara Batu': {
                lat: 5.239001,
                long: 96.944725,
            },
            'Dewantara': {
                lat: 5.244734,
                long: 97.008761,
            },
        };

        L.Control.Legend = L.Control.extend({
            onAdd: function(map) {
                const legend = L.DomUtil.create('div', 'legend');

                legend.innerHTML +=
                    '<i style="background: #007f00"></i> <p>C1</p>' +
                    '<i style="background: #3689ce"></i> <p>C2</p>' +
                    '<i style="background: #ff7f00"></i> <p>C3</p>';

                return legend;
            }
        });

        L.control.legend = function(options) {
            return new L.Control.Legend(options);
        };

        L.control.legend({
            position: 'bottomright'
        }).addTo(map);

        const c1 = JSON.parse('{!! $c1->toJson() !!}');
        const c2 = JSON.parse('{!! $c2->toJson() !!}');
        const c3 = JSON.parse('{!! $c3->toJson() !!}');
        const subdistricts = JSON.parse('{!! $subdistricts->mapWithKeys(fn($item) => [$item->id => $item])->toJson() !!}');

        for (const key in c1) {
            try {
                const element = c1[key];
                const name = subdistricts[element.subdistrict_id].name;

                L.marker([coordinates[name].lat, coordinates[name].long])
                    .addTo(map)
                    .bindPopup(`
                    <p>${name}</p>
                    <div>
                        <span>Luas Tanah (ha): ${element.original_land_area.toLocaleString('id-ID')}</span> <br>
                        <span>Luas Panen (ha): ${element.original_harvested_area.toLocaleString('id-ID')}</span> <br>
                        <span>Produktifitas (kW/ha): ${element.original_productivity.toLocaleString('id-ID')}</span> <br>
                        <span>Produksi (ton): ${element.original_yield.toLocaleString('id-ID')}</span>
                    </div>
                    `)
                    .setIcon(L.icon({
                        iconUrl: '/green.png',
                        iconSize: [25, 41],
                        iconAnchor: [12, 41],
                        popupAnchor: [1, -34],
                        tooltipAnchor: [16, -28],
                        shadowSize: [41, 41]
                    }));
            } catch (error) {
                console.log(key);
                console.error(error);
            }
        }

        for (const key in c2) {
            try {
                const element = c2[key];
                const name = subdistricts[element.subdistrict_id].name;

                L.marker([coordinates[name].lat, coordinates[name].long])
                    .addTo(map)
                    .bindPopup(`
                    <p>${name}</p>
                    <div>
                        <span>Luas Tanah (ha): ${element.original_land_area.toLocaleString('id-ID')}</span> <br>
                        <span>Luas Panen (ha): ${element.original_harvested_area.toLocaleString('id-ID')}</span> <br>
                        <span>Produktifitas (kW/ha): ${element.original_productivity.toLocaleString('id-ID')}</span> <br>
                        <span>Produksi (ton): ${element.original_yield.toLocaleString('id-ID')}</span>
                    </div>
                    `);
            } catch (error) {
                console.log(key);
                console.error(error);
            }
        }

        for (const key in c3) {
            try {
                const element = c3[key];
                const name = subdistricts[element.subdistrict_id].name;

                L.marker([coordinates[name].lat, coordinates[name].long])
                    .addTo(map)
                    .bindPopup(`
                    <p>${name}</p>
                    <div>
                        <span>Luas Tanah (ha): ${element.original_land_area.toLocaleString('id-ID')}</span> <br>
                        <span>Luas Panen (ha): ${element.original_harvested_area.toLocaleString('id-ID')}</span> <br>
                        <span>Produktifitas (kW/ha): ${element.original_productivity.toLocaleString('id-ID')}</span> <br>
                        <span>Produksi (ton): ${element.original_yield.toLocaleString('id-ID')}</span>
                    </div>
                    `)
                    .setIcon(L.icon({
                        iconUrl: '/orange.png',
                        iconSize: [25, 41],
                        iconAnchor: [12, 41],
                        popupAnchor: [1, -34],
                        tooltipAnchor: [16, -28],
                        shadowSize: [41, 41]
                    }));
            } catch (error) {
                console.log(key);
                console.error(error);
            }
        }
    </script>

    </script>
</x-app-layout>
