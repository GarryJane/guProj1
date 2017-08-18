'use strict';

function Container() {
    this.id = "";
    this.className = "";
}

function Menu(my_id, my_class, my_items) {
    Container.call(this);
    this.id = my_id;
    this.className = my_class;
    this.items = my_items;
}

Menu.prototype.constructor = Menu;

function MenuItem(my_href, my_name) {
    this.className = "menu-item";
    this.href = my_href;
    this.name = my_name;
}

MenuItem.prototype = Object.create(Container.prototype);
MenuItem.prototype.constructor = MenuItem;
MenuItem.prototype.renderItem = function () {
    return "<li class='" + this.className + "'><a href='" + this.href + "'>" + this.name + "</a></li>";
};

MenuItem.prototype.renderSeparator = function () {
    return "<li role='separator' class='divider'></li>";
};

MenuItem.prototype.renderDropdown = function () {
};


Menu.prototype.render = function () {
    // var result = "<ul class='" + this.className + "' id='" + this.id + "'>";
    var result = "";
    for (var item in this.items) {
        if (this.items[item] instanceof MenuItem) {
            if (this.items[item].name === "---") {
                result += this.items[item].renderSeparator();
            } else {
                result += this.items[item].renderItem();
            }
        }
        // result += "</ul>";
        document.getElementById(this.id).innerHTML = result;
    }
 };

    var m_items = [
        new MenuItem("#", "Dresses"),
        new MenuItem("#", "Tops"),
        new MenuItem("#", "Sweaters/Knits"),
        new MenuItem("#", "Jackets/Coats"),
        new MenuItem("#", "Blazers"),
        new MenuItem("#", "Denim"),
        new MenuItem("#", "Leggings/Pants"),
        new MenuItem("#", "Skirts/Shorts"),
        new MenuItem("#", "---"),
        new MenuItem("#", "afsdfdf"),
        new MenuItem("#", "fasdf"),
        new MenuItem("#", ""),
        new MenuItem("#", "Sweaters"),
        new MenuItem("#", ""),
        new MenuItem("#", ""),
        new MenuItem("#", "Jackets/vests")
    ];

    console.log(m_items);

    var menu = new Menu("list1", "dropdown-menu__item", m_items);
    menu.render();

// <li role="separator" class="divider"></li>