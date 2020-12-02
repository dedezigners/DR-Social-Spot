import Storage from './storage'

class User {

    responseAfterLogin(res) {
        const accessToken = res.data.access_token;

        if (accessToken) {
            Storage.store(accessToken);
        }

        return true;
    }

    hasToken() {
        const storedToken = Storage.getToken()
        return storedToken ? true: false;
    }

    loggedIn() {
        return this.hasToken();
    }

    logout() {
        Storage.clear();
    }

    token() {
        return Storage.getToken();
    }

}

export default User = new User();
