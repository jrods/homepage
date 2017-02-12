/**
 * view.js
 * Version: 0.1
 * Author: Jared Smith <jared.smith.jrod@gmail.com>
 * Github: @jrods
 * Home: 
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this file,
 * You can obtain one at http://mozilla.org/MPL/2.0/.
**/
'use strict';

function View() {
    var self = this; // for anywhere, where this doesnt point to the View obj

    this.fragment     = (window.location.hash || '#about').substring(1);
    this.current_view = document.getElementById(this.fragment);

    this.figure_out_child_parent_view();
    
    this.toggle_view();

    var section_change = function () {
        console.log(window.location.hash);

        self.toggle_view();
        
        self.fragment = window.location.hash.substring(1);
        self.current_view = document.getElementById(self.fragment);

        self.figure_out_child_parent_view();
        self.toggle_view();
    };
    window.addEventListener('popstate', section_change);
}

View.prototype.figure_out_child_parent_view = function () {
    if (this.current_view) {
        var first_child = this.current_view.querySelector('div.wrap > section');
        if (first_child) {
            this.parent_view = this.current_view;
            this.current_view = first_child;
        }
        else {
            this.parent_view = this.current_view.closest('article > section');
        }
    }
    else {
        console.log('No section with id:', this.fragment);
        this.parent_view = undefined;
    }
};

View.prototype.toggle_view = function () {
    if (this.current_view)
        this.current_view.classList.toggle('visible');
    
    if (this.current_view === this.parent_view)
        return;

    if (this.parent_view)       
        this.parent_view.classList.toggle('visible');
};

View.prototype.next_view = function () {
    console.log('todo, next');
};

View.prototype.prev_view = function () {
    console.log('todo, prev');
};
