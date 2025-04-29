<?php
use Illuminate\Support\Facades\Route;

//GET - admin/crm/module
//POST - admin/crm/module - store
//PUT - admin/crm/module/{calendar} - update
//GET - admin/crm/module/{calendar} - show
//DELETE - admin/crm/module/{calendar} - destroy
//GET - admin/crm/module/{calendar}/edit - edit

Route::group([
    'namespace' => 'Admin', 'prefix' => '/admin', 'as' => 'admin.', 'middleware' => ['auth', 'verified']], function () {

    Route::post('slider/set', 'Slider\IndexController@sort')->name('slider.sort');
    Route::post('gallery/set', 'Gallery\IndexController@sort')->name('gallery.sort');
    Route::post('image/set', 'Gallery\ImageController@sort')->name('image.sort');
    Route::post('box/set', 'Box\IndexController@sort')->name('box.sort');
    Route::post('invest-page/set', 'Developro\Page\IndexController@sort')->name('investment_page.sort');

    //Route::get('article/import', 'Article\IndexController@import')->name('article.import');
    //Route::get('news/import', 'News\IndexController@import')->name('news.import');
    //Route::get('promotion/import', 'Promotion\IndexController@import')->name('promotion.import');

    Route::get('user/datatable', 'User\IndexController@datatable')->name('user.datatable');

    Route::resources([
        'dictionary' => 'Dictionary\IndexController',
        'page' => 'Page\IndexController',
        'url' => 'Url\IndexController',
        'gallery' => 'Gallery\IndexController',
        'image' => 'Gallery\ImageController',
        'slider' => 'Slider\IndexController',
        'user' => 'User\IndexController',
        'role' => 'Role\IndexController',
        'greylist' => 'Greylist\IndexController',
        'box'=> 'Box\IndexController',
        'map'=> 'Map\IndexController'
    ]);

    Route::get('dictionary/{slug}/{locale}/edit', 'Dictionary\IndexController@edit')->name('dictionary.edit');

    // Settings
    Route::group(['prefix'=>'/settings', 'as' => 'settings.'], function () {
        Route::resources([
            '/' => 'Dashboard\IndexController',
            'seo' => 'Dashboard\SeoController',
            'social' => 'Dashboard\SocialController',
            'popup' => 'Dashboard\PopupController'
        ]);
    });

    Route::get('logs', 'Log\IndexController@index')->name('log.index');
    Route::get('logs/datatable', 'Log\IndexController@datatable')->name('log.datatable');
    Route::get('logs/{causer}', 'Log\IndexController@show')->name('log.show');
    Route::get('logs/datatable/{causer}', 'Log\IndexController@datatableUser')->name('log.datatable-user');

    Route::group(['namespace' => 'Rodo', 'prefix' => '/rodo', 'as' => 'rodo.'], function () {

        Route::resources([
            'clients' => 'ClientController',
            'rules' => 'RulesController',
            'settings' => 'SettingsController',
        ]);
    });

// CRM
    // admin.crm
//    Route::group(['namespace' => 'Crm', 'prefix' => '/crm', 'as' => 'crm.'], function () {
//        Route::get('inbox', 'Inbox\IndexController@index')->name('inbox.index');
//        Route::get('inbox/datatable', 'Inbox\IndexController@datatable')->name('inbox.datatable');
//        Route::delete('inbox/{id}', 'Inbox\IndexController@destroy')->name('inbox.destroy');
//
//        // Statistics
//        Route::group(['namespace' => 'Statistics','prefix'=>'/statistics', 'as' => 'statistics.'], function () {
//            Route::get('/', 'IndexController@index')->name('index');
//            Route::get('/rooms', 'IndexController@rooms')->name('rooms');
//        });
//
//        // Settings
//        Route::group(['namespace' => 'Statistics','prefix'=>'/statistics', 'as' => 'statistics.'], function () {
//            Route::get('/', 'IndexController@index')->name('index');
//            Route::get('/rooms', 'IndexController@rooms')->name('rooms');
//        });
//
//        // admin.crm.clients.create
//        Route::group(['namespace' => 'Client','prefix'=>'/clients', 'as' => 'clients.'], function () {
//
//            Route::get('/', 'IndexController@index')->name('index');
//            Route::get('/datatable', 'IndexController@datatable')->name('datatable');
//            Route::get('/create', 'IndexController@create')->name('create');
//            Route::get('/{client}', 'IndexController@show')->name('show');
//            Route::put('/{client}', 'IndexController@update')->name('update');
//
//            Route::get('{client}/calendar', 'CalendarController@index')->name('calendar');
//            Route::get('{client}/rodo', 'RodoController@show')->name('rodo');
//
//            // Client chat
//            Route::group(['prefix'=>'{client}/chat', 'as' => 'chat.'], function () {
//                Route::get('/', 'ChatController@show')->name('show');
//                Route::post('/form', 'ChatController@form')->name('form');
//                Route::post('/mark', 'ChatController@mark')->name('mark');
//                Route::post('/', 'ChatController@create')->name('create');
//            });
//        });
//    });

// DeveloPro
    Route::group(['namespace' => 'Developro', 'prefix' => '/developro', 'as' => 'developro.'], function () {

        Route::resources([
            'investment' => 'Investment\IndexController'
        ]);

        Route::group(['prefix' => '/investment', 'as' => 'investment.'], function () {
            Route::resources([
                '{investment}/page' => 'Page\IndexController',
                '{investment}/article' => 'Article\IndexController',
                '{investment}/section' => 'Section\IndexController',
                '{investment}/plan' => 'Plan\IndexController',
                '{investment}/search' => 'Search\IndexController',
                '{investment}/houses' => 'House\HouseController',
                '{investment}/floors' => 'Floor\FloorController',
                '{investment}/floor/{floor}/properties' => 'Property\PropertyController',
                '{investment}/buildings' => 'Building\BuildingController',
                '{investment}/building.floors' => 'Building\BuildingFloorController',
                '{investment}/building.floor.properties' => 'Building\BuildingPropertyController',
                '{investment}/property/{property}/message' => 'Property\InboxController'
            ]);

            Route::get('{investment}/log', 'Investment\IndexController@log')->name('log');
            Route::get('{investment}/datatable', 'Investment\IndexController@datatable')->name('log.datatable');
            Route::get('{investment}/events', 'Investment\IndexController@events')->name('events');
            Route::get('{investment}/eventTable', 'Investment\IndexController@eventtable')->name('eventtable');

            Route::get('{investment}/properties', 'Property\PropertyController@fetchProperties');

            //admin.developro.investment.property.history
            Route::get('{investment}/property/{property}/history', 'Property\HistoryController@show')->name('property.history');


            Route::get('{investment}/floors/{floor}/copy', 'Floor\FloorController@copy')->name('floors.copy');
            Route::get('{investment}/building/{building}/floors/{floor}/copy', 'Building\BuildingFloorController@copy')->name('building.floors.copy');
        });
    });
});

Route::get('{uri}', 'Front\MenuController@index')->where('uri', '([A-Za-z0-9\-\/]+)');