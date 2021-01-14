<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kawal Corona</title>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    </head>
    <body>
        <div class="title">
            <p>KAWAL CORONA</p>
            <P>Coronavirus Indonesia Live Data</P>

            <div class="boxes">
                <div class="positif box">
                    <p>TOTAL POSITIF</p>
                    <p class="number">{{ $indonesia[0]['positif'] }}</p>
                    <p>ORANG</p>    
                </div>
                <div class="sembuh box">
                    <p>TOTAL SEMBUH</p>
                    <p class="number">{{ $indonesia[0]['sembuh'] }}</p>
                    <p>ORANG</p>
                </div>
                <div class="meninggal box">
                    <p>TOTAL MENINGGAL</p>
                    <p class="number">{{ $indonesia[0]['meninggal'] }}</p>
                    <p>ORANG</p>
                </div>
            </div>
        </div>
        <div class="table">
            <p>Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</p>
            <form action="" class="search-bar">
                <input type="text" id="filter" placeholder="cari disini">
                <button type="button">
                    <i class="fa fa-search"></i>
                </button>
            </form>
            <div class="clear"></div>
            <div class="table-container">
                <table class="provinsi">
                    <tr>
                        <th>No.</th>
                        <th>Provinsi</th>
                        <th>Positif</th>
                        <th>Sembuh</th>
                        <th>Meninggal</th>
                    </tr>
                    @foreach ($provinsi as $key=>$p)
                        <tr>
                            <td>{{ $key+1 }} </td>
                            <td>{{ $p['attributes']['Provinsi'] }}</td>
                            <td>{{ $p['attributes']['Kasus_Posi'] }}</td>
                            <td>{{ $p['attributes']['Kasus_Semb'] }}</td>
                            <td>{{ $p['attributes']['Kasus_Meni'] }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>