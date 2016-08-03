var Observer = (function () {
    function Observer() {
        this.observers = [];
    }

    Observer.prototype.addObserver = function (observer) {
        this.observers.push(observer);
    };

    Observer.prototype.removeObserver = function (observer) {
        var index = this.observers.indexOf(observer);
        if (index === -1) {
            return;
        }
        this.observers.splice(index, 1);
    };

    Observer.prototype.notify = function (data) {
        this.observers.forEach(function (observer) {
            observer(data);
        });
    };
    
    return Observer;
}());