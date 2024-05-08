<?php

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    SEOTools::setTitle('Home');
    SEOTools::setDescription('
        Fondazione Marcegaglia onlus-FMO is an Italian non-governmental organization registered in Rwanda since 2017 
        with office in Bugesera District.
        FMO focuses on the more disadvantaged situations: it supports women and their children, 
        as well as anyone who has no say in the life of their countries and cannot therefore work to bring changes.'
    );
    SEOTools::opengraph()->setUrl('https://application.fmorwanda.org');
    SEOTools::setCanonical('https://application.fmorwanda.org');
    SEOTools::opengraph()->addProperty('type', 'pages');
    SEOTools::twitter()->setSite('@fmorwanda');
    SEOTools::jsonLd()->addImage('https://application.fmorwanda.org/images/logo.jpg');
    SEOMeta::addKeyword(['fondazione marcegaglia onlus', 'volunteer', 'rwanda', 'bugesera', 'rilima', 'internship', '']);

    return view('welcome');
})->name('welcome');
