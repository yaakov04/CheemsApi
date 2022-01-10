<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Newspaper extends Model
{
    
    use Sushi;

    protected $rows = [
        ['name' => 'Noticieros Televisa', 'className'=>'NoticierosTelevisa', 'url'=>'https://noticieros.televisa.com', 'uri' => 'https://noticieros.televisa.com/search-results/?q=Cheems#gsc.tab=0&gsc.q=Cheems&gsc.sort=date'],
        //['name' => 'El Tiempo', 'className'=>'ElTiempo', 'url'=>'https://www.eltiempo.com', 'uri' => 'https://www.eltiempo.com/buscar?q=Cheems'],
        //['name' => 'SDP Noticias', 'className'=>'SdpNoticias', 'url'=>'https://www.sdpnoticias.com', 'uri' => 'https://www.sdpnoticias.com/buscar/?query=cheems'],
        //['name' => 'El Universal', 'className'=>'ElUniversal', 'url'=>'https://www.eluniversal.com.mx', 'uri' => 'https://www.eluniversal.com.mx/tag/cheems']
    ];

}
