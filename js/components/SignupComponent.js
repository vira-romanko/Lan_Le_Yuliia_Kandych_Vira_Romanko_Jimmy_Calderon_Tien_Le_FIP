export default {
    template:
        `
    <form action="./admin/admin_createuser.php" method="POST">
        <label>First Name:</label>
        <input type="text" name="fname" value=""><br>

        <label>Username:</label>
        <input type="text" name="username" value=""><br>

        <label>Password:</label>
        <input type="text" name="password" value=""><br>

        <label>Email:</label>
        <input type="text" name="email" value=""><br>


        <button type="submit" name="submit">Create User</button>
    </form>
    `,
    data() {
        return {
            fname: '',
            username: '',
            password: '',
            email: ''
        }

    },

    methods: {
        login(e) {
            e.preventDefault()
            if (this.username != "" && this.password != "") {
                let formData = new FormData();

                formData.append('fname', this.username)
                formData.append('password', this.password)
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
                    })
                    .catch(err => console.log(err))

            } else {
                console.log('type in username and password')
            }


        }

    }
}