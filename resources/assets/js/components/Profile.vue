<template>
<section id="contact-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-from mt-30">
                    <div class="section-title">
                        <h4>Complete your profile</h4>
                    </div> <!-- section title -->
                    <div class="main-form pt-45">
                        <form @submit.prevent="submit" data-toggle="validator">
                            <div class="row">
                               
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="nationality" type="text" placeholder="Nationality"  v-model="fields.nationality">
                                         <div v-if="errors && errors.nationality" class="help-block with-errors">{{errors.nationality[0]}}</div>
                                    </div> <!-- single form -->
                                </div>
                               <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <datepicker v-model="fields.dateofbirth"  placeholder="Date of birth" name="dateofbirth" :typeable="true" :bootstrap-styling="true" class="dateofbirth"></datepicker>
                                         <div v-if="errors && errors.dateofbirth" class="help-block with-errors">{{errors.dateofbirth[0]}}</div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="country" type="text" placeholder="Current Country"  v-model="fields.country">
                                         <div v-if="errors && errors.country" class="help-block with-errors">{{errors.country[0]}}</div>
                                    </div> <!-- single form --> 
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="city" type="text" placeholder="Current City"  v-model="fields.city">
                                         <div v-if="errors && errors.city" class="help-block with-errors">{{errors.city[0]}}</div>
                                    </div> <!-- single form -->
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <select name="messenger" v-on:change="change('messenger',$event)">
                                            <option value="">Messenger</option>
                                            <option v-for="item in messenger">
                                                {{item}}
                                            </option>
                                        </select>
                                         <div v-if="errors && errors.messenger" class="help-block with-errors">{{errors.messenger[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="messengerid" type="text" placeholder="Messenger ID"  v-model="fields.messengerid">
                                         <div v-if="errors && errors.messengerid" class="help-block with-errors">{{errors.messengerid[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="finaleducation" type="text" placeholder="Final Education"  v-model="fields.finaleducation">
                                         <div v-if="errors && errors.finaleducation" class="help-block with-errors">{{errors.finaleducation[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="grade" type="text" placeholder="If you still studying which grade or year are you in"  v-model="fields.grade">
                                         <div v-if="errors && errors.grade" class="help-block with-errors">{{errors.grade[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="occupation" type="text" placeholder="Current Job/Occupation"  v-model="fields.occupation">
                                        <div v-if="errors && errors.occupation" class="help-block with-errors">{{errors.occupation[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="countriesvisited" type="text" placeholder="Countries visited so far"  v-model="fields.countriesvisited">
                                        <div v-if="errors && errors.countriesvisited" class="help-block with-errors">{{errors.countriesvisited[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <select name="financial_programme" v-on:change="change('financial_programme',$event)">
                                            <option value="">Financial Sponsor during your program stay</option>
                                           <option v-for="item in financial_programme">
                                                {{item}}
                                            </option>
                                        </select>
                                         <div v-if="errors && errors.financial_programme" class="help-block with-errors">{{errors.financial_programme[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <select name="korean_skills" v-on:change="change('korean_skills',$event)">
                                            <option value="">Korean Level Skills</option>
                                           <option v-for="item in skillset">
                                                {{item}}
                                            </option>
                                        </select>
                                         <div v-if="errors && errors.korean_skills" class="help-block with-errors">{{errors.korean_skills[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                        <div class="single-form form-group">
                                            <select name="english_sills" v-on:change="change('english_skills',$event)">
                                                <option value="">English Level Skills</option>
                                               <option v-for="item in skillset">
                                                {{item}}
                                            </option>
                                            </select>
                                             <div v-if="errors && errors.english_sills" class="help-block with-errors">{{errors.english_sills[0]}}</div>
                                        </div> <!-- single form -->
                                    </div>

                                    <div class="col-md-12">
                                            <div class="single-form form-group">
                                                <textarea name="reason" placeholder="Reason you are interested in Korea" v-model="fields.reason"></textarea>
                                                 <div v-if="errors && errors.reason" class="help-block with-errors">{{errors.reason[0]}}</div>
                                            </div> <!-- single form -->
                                        </div>

                                        <div class="col-md-12">
                                                <div class="single-form form-group">
                                                    <textarea name="comment" placeholder="Comments" v-model="fields.comment"></textarea>
                                                    <div v-if="errors && errors.comment" class="help-block with-errors">{{errors.comment[0]}}</div>
                                                </div> <!-- single form -->
                                            </div>
    


                                

                                <div class="col-md-12">
                                    <div class="single-form" style="font-size:15px;">
                                    <flash-message></flash-message>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <button type="submit" class="main-btn">Send</button>
                                    </div> <!-- single form -->
                                </div> 
                            </div> <!-- row -->
                        </form>
                    </div> <!-- main form -->
                </div> <!--  contact from -->
            </div>
            
        </div> <!-- row -->
    </div> <!-- container -->
</section>
</template>

<script>
import Datepicker from 'vuejs-datepicker';
import moment from 'moment';

export default {
    data(){
       return{
           date: new Date(),
           messenger: ["Whatsapp", "line", "kakao", "Instagram", "Wechat"],
           financial_programme:  ["Parent","Yourself","Others"],
           skillset:  ["Beginner","Intermediate","Advanced"],
           fields:{
               messenger: "Messenger",
               financial_programme: "",
               korean_skills: "",
               english_skills: "",
               dateofbirth: null,
           },
           errors:{},
           //DatePickerFormat: 'dd/MM/yyyy',
       }
   },

    mounted(){
        $(".vdp-datepicker__calendar").css("font-size","16px");
    },
    components: {
    Datepicker,
   },
   

   methods:{
      change(type,event){
           var fieldvalue = event.target.options[event.target.selectedIndex].value;
           if(type == "messenger"){
               this.fields.messenger=fieldvalue;
           }
           else if(type == "financial_programme"){
               this.fields.financial_programme=fieldvalue;
           }
           else if(type == "korean_skills"){
               this.fields.korean_skills=fieldvalue;
           }
           else if(type == "english_skills"){
               this.fields.english_skills=fieldvalue;
           }
      },

    submit() {
        this.errors = {};
       window.axios.defaults.headers.common = {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        };
        axios.patch('/api/profile', this.fields).then(response => {
            this.showflash("Profile updated successfully", "success");
        }).catch(error => {
          console.log(error);
          if (error.response.status === 422) {
            this.errors = error.response.data.errors || {};
          }
          else if(error.response.status === 405) {
             showflash("Session expired. Please login again", "error");
          }
          else if(error.response.status === 500) {
             showflash(error.responseJSON.message, "error");
          }
        });
    },


    showflash(msg,type){
         this.flash(msg, type, {
            timeout: 2000,
            });
    },

   

     

   }
        

}
</script>

