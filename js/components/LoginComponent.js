export default {
    template: `
    <div>
        <form action="" method='post'>
            <label>Username:</label><br>
            <input v-model='username' type="text" name="username" value='' /><br>

            <label>Password:</label><br>
            <input v-model='password' type="text" name="password" value='' /><br>

            <button @click.prevent="login" name='submit' type='submit'>Submit</button>
            {{status}}
            <a href='#/signup'>Sign Up</a>
        </form>
    </div>`,
    data() {
        return {
            username: '',
            password: '',
            status: ''
        }

    },

    methods: {
        login(e) {

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
                        this.status = data

                        if (this.status == 'login successful') {
                            window.location.href = "./admin/index.php";
                        }
                    })
                    .catch(err => console.log(err))



            } else {
                this.status = 'type in username and password'
            }


        }

    }
}