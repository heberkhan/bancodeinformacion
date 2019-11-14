<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GestionMercado extends Model
{
  protected $fillable = ['comercio_id', 'economiaDigital', 'internetAyuda', 'equipoVentas', 'manejaSoftware', 'radio', 'volantes', 'web',
                        'mFacebook', 'mTwitter', 'mInstagram', 'mYoutube', 'mWhatsapp', 'ferias', 'noHace',  'ampliarNegocio',
                        'emailD', 'twitterD', 'facebookD', 'instagramD', 'whatsappD', 'youtubeD', 'otroD',
                        'usaInternet', 'usaEmail', 'usaDrive', 'usaFacebook', 'usaTwitter', 'usaInstagram',
                        'usaYoutube', 'usaWhatsapp', 'usaEditores', 'usaWord', 'interesaPublicidadRedes', 'inversionPublicidad', 'user_id'];
}
