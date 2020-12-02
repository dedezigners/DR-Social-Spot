class Storage {

    storeToken(token) {
        localStorage.setItem('token', token);
    }
    
    storeAdmin(admin) {
        localStorage.setItem('admin', admin);
    }

    storeUser(user) {
        localStorage.setItem('user', JSON.stringify(user));
    }
    
    storeName(name) {
        localStorage.setItem('name', name);
    }

    store(token) {
        this.storeToken(token);
    }
    
    clear() {
        localStorage.removeItem('token');
    }

    getToken() {
        return localStorage.getItem('token');
    }

    getUser() {
        return localStorage.getItem('user');
    }

    getName() {
        return localStorage.getItem('name');
    }

}

export default Storage = new Storage();
