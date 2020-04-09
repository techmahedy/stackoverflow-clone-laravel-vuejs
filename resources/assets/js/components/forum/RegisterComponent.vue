<template>
    <div class="container">
    <div class="post">
    <form action="#" class="form newtopic" @submit.prevent="register">
        <div class="postinfotop">
            <h2>Create New Account</h2>
        </div>

        <!-- acc section -->
        <div class="accsection">
            <div class="topwrap">
                <div class="userinfo pull-left">
                </div>
                <div class="posttext pull-left">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <input v-model="form.first_name" type="text" placeholder="First Name" class="form-control" :class="{ 'is-invalid': form.errors.has('first_name') }" name="first_name">
                            <has-error :form="form" field="first_name"></has-error>
                        </div>
                        <div class="col-lg-6 col-md-6">
                         <input type="file" @change='upload_avatar' :class="{ 'is-invalid': form.errors.has('avatar') }" name="avatar">
                        <has-error :form="form" field="avatar"></has-error> 
                        <div class="avatar img-fluid img-circle" style="margin-top:10px">
                           <img :src="get_avatar()" v-bind:style="form.styleObject"/>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input v-model="form.last_name" type="text" placeholder="Last Name" class="form-control" :class="{ 'is-invalid': form.errors.has('last_name') }" name="last_name">
                            <has-error :form="form" field="last_name"></has-error>
                        </div>
                    </div>
                    <div>
                        <input v-model="form.username" type="text" placeholder="Username" class="form-control" :class="{ 'is-invalid': form.errors.has('username') }" name="username">
                        <has-error :form="form" field="username"></has-error>
                    </div>
                    <div>
                       <input v-model="form.email" type="text" placeholder="Email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" name="email">
                        <has-error :form="form" field="email"></has-error>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                             <input v-model="form.password" type="text" placeholder="password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }" name="password">
                             <has-error :form="form" field="password"></has-error>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input v-model="form.password_confirmation" type="text" placeholder="Confirm password" class="form-control" :class="{ 'is-invalid': form.errors.has('password_confirmation') }" name="password_confirmation">
                           <has-error :form="form" field="password_confirmation"></has-error>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>  
        </div><!-- acc section END -->

        <div class="postinfobot">

            <div class="pull-right postreply">
                <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                <div class="pull-left"><button type="submit" class="btn btn-primary">Sign Up</button></div>
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
                first_name: '',
                last_name: '',
                username: '',
                email: '',
                password: '',
                password_confirmation: '',
                avatar: '',
            
                styleObject: {
                   width: '100px',
                   height: '100px'
                }

              })
            }
        },

        methods: {

            register () {
                this.form.post('/register')
                    .then(({ data }) => { console.log(data) })
            },
            upload_avatar(e){
              let file = e.target.files[0];
                let reader = new FileReader();  

                if(file['size'] < 2111775)
                {
                    reader.onloadend = (file) => {
                    //console.log('RESULT', reader.result)
                     this.form.avatar = reader.result;
                    }              
                     reader.readAsDataURL(file);
                }else{
                    alert('File size can not be bigger than 2 MB')
                }
            },
             //For getting Instant Uploaded Photo
            get_avatar(){
               let photo = (this.form.avatar.length > 100) ? this.form.avatar : "img/profile/"+ this.form.avatar;
               return photo;
            },

        }       
    }
</script>
