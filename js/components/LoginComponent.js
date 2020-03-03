export default {
    template: `
    <div>
        <form action="./admin/admin_login.php?user=true" method='post'>
            <label>Username:</label><br>
            <input v-model='username' type="text" name="username" value='' /><br>

            <label>Password:</label><br>
            <input v-model='password' type="text" name="password" value='' /><br>

            <button @click='login' name='submit' type='submit'>Submit</button>
            <a href='#/signup'>Sign Up</a>
        </form>
    </div>`,
    data() {
        return {
            username: '',
            password: ''
        }

    },

    methods: {
        login(e) {
            e.preventDefault()
            if (this.username != "" && this.password != "") {
                let formData = new FormData();

                formData.append('username', this.username)
                formData.append('password', this.password)


                let url = './admin/admin_login.php';

                fetch(url, {
                    method: "POST",
                    body: formData
                })
                    .then(res => res.json())
                    .then(data => {
                        console.log(data)
                    })
                    .catch(err => console.log(err))

            } else {
                console.log('type in username and password')
            }


        }

    }
}