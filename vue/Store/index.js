const store = {
    state: {
        token: localStorage.getItem('token') || null,
        user: {},
        error: null
    },
    login (form) {
        return new Promise((resolve) => {
            $.post("http://127.0.0.1:8000/api/login", form).done((data) =>{
                if(data.access_token) {
                    localStorage.setItem('token', data.access_token)
                    this.state.token = data.access_token
                    window.location.replace('/')
                } else {
                    this.state.error = data.message
                }
                resolve(data)
            })
        })
    }
}
