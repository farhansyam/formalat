<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Black & White</title>

    <style type="text/css">
        body {
            font-size: small;
            line-height: 1.4;
        }

        p {
            margin: 0;
        }

        .performance-facts {
            border: 1px solid black;
            margin: 30px;
            float: left;
            width: 90%;
            padding: 0.5rem;

            table {
                border-collapse: collapse;
            }
        }

        .performance-facts__title {
            font-weight: bold;
            font-size: 2rem;
            margin: 0 0 0.25rem 0;
        }

        .performance-facts__header {
            border-bottom: 10px solid black;
            padding: 0 0 0.25rem 0;
            margin: 0 0 0.5rem 0;

            p {
                margin: 0;
            }
        }

        .performance-facts__table {
            width: 100%;

            thead tr {

                th,
                td {
                    border: 0;
                }
            }

            th,
            td {
                font-weight: normal;
                text-align: left;
                padding: 0.25rem 0;
                border-top: 1px solid black;
                white-space: nowrap;
            }

            td {
                &:last-child {
                    text-align: right;
                }
            }

            .blank-cell {
                width: 1rem;
                border-top: 0;
            }

            .thick-row {

                th,
                td {
                    border-top-width: 5px;
                }
            }
        }

        .small-info {
            font-size: 0.7rem;
        }

        .performance-facts__table--small {
            @extend .performance-facts__table;
            border-bottom: 1px solid #999;
            margin: 0 0 0.5rem 0;

            thead {
                tr {
                    border-bottom: 1px solid black;
                }
            }

            td {
                &:last-child {
                    text-align: left;
                }
            }

            th,
            td {
                border: 0;
                padding: 0;
            }
        }

        .performance-facts__table--grid {
            @extend .performance-facts__table;
            margin: 0 0 0.5rem 0;

            td {
                &:last-child {
                    text-align: left;

                    &::before {
                        content: "•";
                        font-weight: bold;
                        margin: 0 0.25rem 0 0;
                    }
                }
            }
        }

        .text-center {
            text-align: center;
        }

        .thick-end {
            border-bottom: 10px solid black;
        }

        .thin-end {
            border-bottom: 1px solid black;
        }
    </style>
</head>

<body>


    <section class="performance-facts">
        <header class="performance-facts__header">
            <h1 class="performance-facts__title">Detail Equipment @if($equipment->jenis == 1)
                {{ "AC Split" }}
                @elseif($equipment->jenis == 2)
                {{ "AHUP" }}
                @elseif($equipment->jenis == 3)
                {{ "Cooled Water Chiller" }}
                @elseif($equipment->jenis == 4)
                {{ "PAC" }}
                @elseif($equipment->jenis == 5)
                {{ "Cold Storage" }}
                @elseif($equipment->jenis == 6)
                {{ "Cooling Unit & AC Panel" }}
                @elseif($equipment->jenis == 7)
                {{ "Mini Chiller" }}
                @elseif($equipment->jenis == 8)
                {{ "Evaporative Air Cooler" }}
                @elseif($equipment->jenis == 9)
                {{ "AHU" }}
                @elseif($equipment->jenis == 10)
                {{ "Cooling tower" }}
                @elseif($equipment->jenis == 11)
                {{ "Humidifier" }}
                @elseif($equipment->jenis == 12)
                {{ "Dehumidifier" }}
                @elseif($equipment->jenis == 13)
                {{ "FCU (Fan Cooling Unit)" }}
                @elseif($equipment->jenis == 14)
                {{ "Exhaust Fan" }}
                @elseif($equipment->jenis == 15)
                {{ "Pompa" }}
                @elseif($equipment->jenis == 16)
                {{ "Spot Cooling" }}
                @elseif($equipment->jenis == 17)
                {{ "Water Mist" }}
                @elseif($equipment->jenis == 18)
                {{ "Chiller Centrifugal" }}
                @elseif($equipment->jenis == 19)
                {{ "Floor Standing" }}
                @elseif($equipment->jenis == 20)
                {{ "Ac Cassette" }}
                @elseif($equipment->jenis == 21)
                {{ "Split Duct" }}
                @endif
            </h1>
            <p>ID Equipment : {{$formattedId = sprintf('%05d', $equipment->id)}}EQ
        </header>
        <table>
            <thead>
                <tr>
                    <th rowspan="5" style="margin-right: 10px;">
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('storage/' . $equipment->qrcode))) }}" alt="Gambar" width="100">

                    </th>
                    <th></th>
                    <th>Brand</th>
                    <th>: {{$equipment->brand}}</th>
                    <th></th>
                    <th>Kapasitas</th>
                    <th>: {{$equipment->kapasitas}}</th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>

                    <th>Serial Number</th>
                    <th>: {{$equipment->serial_number}}</th>
                    <th></th>
                    <th>Area</th>
                    <th>: {{$equipment->area}}</th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>

                    <th>Name Plate</th>
                    <th>: {{$equipment->nameplate}}</th>
                    <th></th>
                    <th>Tanggal Operasional</th>
                    <th>: {{$equipment->tanggaloperasi}}</th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>

                    <th>Tahun Pembuatan</th>
                    <th>: {{$equipment->tahun_pembuatan}}</th>
                    <th></th>
                    <th>Jam Operasi</th>
                    <th>: {{$equipment->jamoperasi}} Jam</th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>

                    <th>Tahun Instalasi</th>
                    <th>: {{$equipment->tahun_installasi}}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <td colspan="3">
                        @foreach(explode(',', $equipment->foto) as $imageName)
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('image/' . $imageName))) }}" alt="Gambar" width="200">
                        @endforeach
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> -->
            </tbody>
        </table>

    </section>

</body>


</html>