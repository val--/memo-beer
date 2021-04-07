import React, { Component } from 'react';
import { render } from 'react-dom';

export default class List extends Component {
    render () {
        return <div>
            <h2>My list</h2>
            <ul>
                <li>lorem</li>
                <li>ipsum</li>
            </ul>
        </div>;
    }
}
