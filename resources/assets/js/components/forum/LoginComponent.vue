<template>
    <div class="container">
    <div class="post">
    <div class="postinfotop">
       <h2>Create New Account</h2>
        <p id="text" style="color:red; margin-left:100px;"></p>
    </div>
    <form action="#" class="form newtopic" @submit.prevent="login">
        <!-- acc section -->
        <div class="accsection">
            <div class="topwrap">
                <div class="userinfo pull-left">
                </div>
                <div class="posttext pull-left">
                  
                    <div>
                        <input v-model="form.username" type="text" placeholder="Username" class="form-control" :class="{ 'is-invalid': form.errors.has('username') }" name="username">
                        <has-error :form="form" field="username"></has-error>
                    </div>
       
                    <div>
                        <input v-model="form.password" type="password" placeholder="password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }" name="password">
                        <has-error :form="form" field="password"></has-error>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>  
        </div><!-- acc section END -->

        <div class="postinfobot">

            <div class="pull-right postreply">
                <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                <div class="pull-left"><button :disabled="form.busy" type="submit" class="btn btn-primary">Sign In</button></div>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
        </div>
    </form>
    </div>
</div>
</template>

<script>
    export default {

        data () {
            return {
            form: new Form({
               
                username: '',
                password: '',

              })
            }
        },

        methods: {
            login(){
               
                this.form.post('/login')
                .then(( response ) => { 
                    let attr = document.getElementById("text");
                    attr.innerHTML = response.data.message; 
                })
            }
        }       
    }
</script>
