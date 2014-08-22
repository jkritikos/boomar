<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'boomar', 'action' => 'home'));
        
        //About
        Router::connect('/about', array('controller' => 'boomar', 'action' => 'whatweare'));
        Router::connect('/team', array('controller' => 'boomar', 'action' => 'whoweare'));
        
        //Services
        Router::connect('/approach', array('controller' => 'boomar', 'action' => 'approach'));
        Router::connect('/services', array('controller' => 'boomar', 'action' => 'services'));
        Router::connect('/services/mobile', array('controller' => 'boomar', 'action' => 'mobile'));
        Router::connect('/services/web', array('controller' => 'boomar', 'action' => 'web'));
        Router::connect('/services/branding', array('controller' => 'boomar', 'action' => 'branding'));
        Router::connect('/services/strategy', array('controller' => 'boomar', 'action' => 'strategy'));
        
        //Portfolio
        Router::connect('/portfolio', array('controller' => 'boomar', 'action' => 'portfolio'));
        
        //Projects
        Router::connect('/project/1', array('controller' => 'boomar', 'action' => 'project', 1));
        Router::connect('/project/2', array('controller' => 'boomar', 'action' => 'project', 2));
        Router::connect('/project/3', array('controller' => 'boomar', 'action' => 'project', 3));
        Router::connect('/project/4', array('controller' => 'boomar', 'action' => 'project', 4));
        Router::connect('/project/5', array('controller' => 'boomar', 'action' => 'project', 5));
        Router::connect('/project/6', array('controller' => 'boomar', 'action' => 'project', 6));
        Router::connect('/project/7', array('controller' => 'boomar', 'action' => 'project', 7));
        Router::connect('/project/8', array('controller' => 'boomar', 'action' => 'project', 8));
        Router::connect('/project/9', array('controller' => 'boomar', 'action' => 'project', 9));
        Router::connect('/project/10', array('controller' => 'boomar', 'action' => 'project', 10));
        Router::connect('/project/11', array('controller' => 'boomar', 'action' => 'project', 11));
        Router::connect('/project/12', array('controller' => 'boomar', 'action' => 'project', 12));
        Router::connect('/project/13', array('controller' => 'boomar', 'action' => 'project', 13));
        Router::connect('/project/14', array('controller' => 'boomar', 'action' => 'project', 14));
        Router::connect('/project/15', array('controller' => 'boomar', 'action' => 'project', 15));
        Router::connect('/project/16', array('controller' => 'boomar', 'action' => 'project', 16));
        Router::connect('/project/17', array('controller' => 'boomar', 'action' => 'project', 17));
        Router::connect('/project/18', array('controller' => 'boomar', 'action' => 'project', 18));
        Router::connect('/project/19', array('controller' => 'boomar', 'action' => 'project', 19));
        Router::connect('/project/20', array('controller' => 'boomar', 'action' => 'project', 20));
        
        //Contact
        Router::connect('/contact', array('controller' => 'boomar', 'action' => 'contact'));
        Router::connect('/userContact', array('controller' => 'boomar', 'action' => 'userContact'));
        
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
