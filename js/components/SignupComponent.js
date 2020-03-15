export default {
    template:
        `
    <form action="./admin/admin_createuser.php" method="POST">
        <label>First Name:</label>
        <input v-model='fname' type="text" name="fname" value=""><br>

        <label>Username:</label>
        <input v-model='username' type="text" name="username" value=""><br>

        <label>Password:</label>
        <input v-model='password' type="password" name="password" value=""><br>

        <label>Email:</label>
        <input v-model='email' type="text" name="email" value=""><br>

        {{status}}
        <button @click.prevent="signUp" type="submit" name="submit">Create User</button>
    </form>
    `,
    data() {
        return {
            fname: '',
            username: '',
            password: '',
            email: '',
            status: ''
        }

    },

    methods: {
        signUp(e) {
            e.preventDefault()
            if (this.username != "" && this.password != "") {
                let formData = new FormData();

                formData.append('fname', this.username)
                formData.append('username', this.username)
                formData.append('password', this.username)
                formData.append('email', this.password)


                let url = './admin/admin_createuser.php';

                fetch(url, {
                    method: "POST",
                    body: formData
                })
                    .then(res => res.json())
                    .then(data => {
                        console.log(data)
                        this.status = data
                    })
                    .catch(err => console.log(err))

            } else {
                this.status = 'type in username and password'
            }


        }

    }
}