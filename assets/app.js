/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

import React from 'react';
import ReactDom from 'react-dom'
const el = <h2>Hello from React !</h2>;
ReactDom.render(el, document.getElementById('js_app'));