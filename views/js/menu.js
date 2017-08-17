'use strict'

function Container() {
    this.id = "";
    this.className = "";
    this.htmlCode = "";
}

Container.prototype.render = function () {
    return this.htmlCode;
};

function Menu(my_id, my_class, my_items) {
    Container.call(this);
    this.id = my_id;
    this.className = my_class;
    this.items = my_items;
}

Menu.prototype.constructor = Menu;
Menu.prototype.render = function () {
};

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

MenuItem.prototype.renderSeparator = function renderSeparator() {
    return "<li role='separator' class='divider'></li>";
};

MenuItem.prototype.renderDropdown = function renderSeparator() {
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

    var m_items = {

        0: new MenuItem("#", "Dresses"),
        1: new MenuItem("#", "Tops"),
        2: new MenuItem("#", "Sweaters/Knits"),
        3: new MenuItem("#", "Jackets/Coats"),
        4: new MenuItem("#", "Blazers"),
        5: new MenuItem("#", "Denim"),
        6: new MenuItem("#", "Leggings/Pants"),
        7: new MenuItem("#", "Skirts/Shorts"),
        8: new MenuItem("#", "---"),
        9: new MenuItem("#", "afsdfdf"),
        10: new MenuItem("#", ""),
        11: new MenuItem("#", ""),
        12: new MenuItem("#", "Sweaters"),
        13: new MenuItem("#", ""),
        14: new MenuItem("#", ""),
        15: new MenuItem("#", "Jackets/vests")
    };

    console.log(m_items);

    var menu = new Menu("list1", "dropdown-menu__item", m_items);
    menu.render();

// <li role="separator" class="divider"></li>