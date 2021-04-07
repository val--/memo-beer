import React, { Component } from 'react';
import { render } from 'react-dom';

export default class List extends Component {
    render() {
        const beer_data = [
            {'id' : 1, 'name' : 'Leffe Royale', 'brewery' : 'Abbaye de Leffe', 'abv' : 5},
            {'id' : 2, 'name' : 'Chouffe Houblon', 'brewery' : 'Brasserie d\'Achouffe', 'abv' : 6},
            {'id' : 3, 'name' : 'Chimay Bleue', 'brewery' : 'Abbaye de Chimay', 'abv' : 7},
        ];

        const beer_elements = beer_data.map((beer) => {
            return(
                <tr>
                    <td>{beer.name}</td>
                    <td>{beer.brewery}</td>
                    <td>{beer.abv}</td>
                </tr>
            );
        })

        return (
            <div className="col-md-7">
                <h2>Beer list</h2>
                <table className="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Brewery</th>
                        <th>Abv</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    { beer_elements }
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>&nbsp;</td>
                        <th>&nbsp;</th>
                        <th></th>
                        <td>&nbsp;</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        );
    }
}
