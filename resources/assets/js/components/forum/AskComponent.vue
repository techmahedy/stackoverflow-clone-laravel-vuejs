<template>
      <div class="post">
        <form action="#" class="form newtopic" @submit.prevent="ask_question">
            <div class="topwrap">
                <div class="userinfo pull-left">
                    <div class="avatar">
                    </div>
                </div>
                <div class="posttext pull-left">
                    <div>
                        <input type="text" v-model="form.title" placeholder="Enter Topic Title" class="form-control" :class="{ 'is-invalid': form.errors.has('title') }" name="title">
                        <has-error :form="form" field="title"></has-error>
                    </div>
                    <div>
                       <ckeditor :editor="editor" v-model="form.description" :class="{ 'is-invalid': form.errors.has('description') }" name="description"></ckeditor>
                       <has-error :form="form" field="description"></has-error>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>                              
            <div class="postinfobot">

                <div class="notechbox pull-left">
                    <input type="checkbox" name="note" id="note" class="form-control" />
                </div>

                <div class="pull-left">
                    <label for="note"> Email me when some one post a reply</label>
                </div>

                <div class="pull-right postreply">
                    <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                    <div class="pull-left"><button type="submit" class="btn btn-primary">Post</button></div>
                    <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>
            </div>
        </form>
    </div><!-- POST -->

</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
 export default {
        
        data() {
            return {

                form: new Form({
                    title: '',
                    description: '',
                }),

                editor: ClassicEditor,
                description: 'Rich-text editor content',
            };
        },
        methods: {
            ask_question(){
                this.form.post('/ask')
                    .then(( response ) => { 
                       return window.location.href = '/';
                    })
            }
        }
    }
</script>
