<template>
<section id="contact-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-from mt-30">
                    <div class="section-title">
                        <h4>Edit your profile</h4>
                    </div> <!-- section title -->
                    <div class="main-form pt-45">
                        <form @submit.prevent="submit" data-toggle="validator">
                            <div class="row">
                               
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="nationality" type="text" placeholder="Nationality" :value="this.fields.nationality" @input="this.fields.nationality = $event.target.value">
                                         <div v-if="errors && errors.nationality" class="help-block with-errors">{{errors.nationality[0]}}</div>
                                    </div> <!-- single form -->
                                </div>
                               <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <datepicker :value="this.fields.dateofbirth"  placeholder="Date of birth" name="dateofbirth" :typeable="true" :bootstrap-styling="true" class="dateofbirth"></datepicker>
                                         <div v-if="errors && errors.dateofbirth" class="help-block with-errors">{{errors.dateofbirth[0]}}</div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="country" type="text" placeholder="Current Country"  :value="this.fields.country">
                                         <div v-if="errors && errors.country" class="help-block with-errors">{{errors.country[0]}}</div>
                                    </div> <!-- single form --> 
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="city" type="text" placeholder="Current City"  :value="this.fields.city">
                                         <div v-if="errors && errors.city" class="help-block with-errors">{{errors.city[0]}}</div>
                                    </div> <!-- single form -->
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <select name="messenger" :value="this.fields.messenger" v-on:change="change('messenger',$event)">
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
                                        <input name="messengerid" type="text" placeholder="Messenger ID"  :value="this.fields.messengerid">
                                         <div v-if="errors && errors.messengerid" class="help-block with-errors">{{errors.messengerid[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="finaleducation" type="text" placeholder="Final Education"  :value="this.fields.finaleducation">
                                         <div v-if="errors && errors.finaleducation" class="help-block with-errors">{{errors.finaleducation[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="grade" type="text" placeholder="If you still studying which grade or year are you in"  :value="this.fields.grade">
                                         <div v-if="errors && errors.grade" class="help-block with-errors">{{errors.grade[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="occupation" type="text" placeholder="Current Job/Occupation"  :value="this.fields.occupation">
                                        <div v-if="errors && errors.occupation" class="help-block with-errors">{{errors.occupation[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="countriesvisited" type="text" placeholder="Countries visited so far"  :value="this.fields.countriesvisited">
                                        <div v-if="errors && errors.countriesvisited" class="help-block with-errors">{{errors.countriesvisited[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <select name="financial_programme" :value="this.fields.financial_programme" v-on:change="change('financial_programme',$event)">
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
                                        <select name="korean_skills" :value="this.fields.korean_skills" v-on:change="change('korean_skills',$event)">
                                            <option value="" disabled>Korean Level Skills</option>
                                           <option v-for="item in skillset">
                                                {{item}}
                                            </option>
                                        </select>
                                         <div v-if="errors && errors.korean_skills" class="help-block with-errors">{{errors.korean_skills[0]}}</div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                        <div class="single-form form-group">
                                            <select name="english_sills" :value="this.fields.english_skills" v-on:change="change('english_skills',$event)">
                                                <option value="" disabled>English Level Skills</option>
                                               <option v-for="item in skillset">
                                                {{item}}
                                            </option>
                                            </select>
                                             <div v-if="errors && errors.english_sills" class="help-block with-errors">{{errors.english_sills[0]}}</div>
                                        </div> <!-- single form -->
                                    </div>

                                    <div class="col-md-12">
                                            <div class="single-form form-group">
                                                <textarea name="reason" placeholder="Reason you are interested in Korea" :value="this.fields.reason"></textarea>
                                                 <div v-if="errors && errors.reason" class="help-block with-errors">{{errors.reason[0]}}</div>
                                            </div> <!-- single form -->
                                        </div>

                                        <div class="col-md-12">
                                                <div class="single-form form-group">
                                                    <textarea name="comment" placeholder="Comments" :value="this.fields.comment"></textarea>
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
           fields: {
               nationality: '',
               dateofbirth: '',
               country: '',
               city: '',
               messengerid: '',
               finaleducation: '',
               grade: '',
               occupation: '',
               countriesvisited: '',
               reason: '',
               comment: '',
           },
           errors:{},
           //DatePickerFormat: 'dd/MM/yyyy',
       }
   },

    mounted(){
        this.fetchdata();
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
        this.fields.nationality=$('input[name=nationality]').val();
        this.fields.dateofbirth=$('input[name=dateofbirth]').val();
        this.fields.country=$('input[name=country]').val();
        this.fields.city=$('input[name=city]').val();
        this.fields.messengerid=$('input[name=messengerid]').val();
        this.fields.finaleducation=$('input[name=finaleducation]').val();
        this.fields.grade = $('input[name=grade]').val();
        this.fields.occupation = $('input[name=occupation]').val();
        this.fields.countriesvisited = $('input[name=countriesvisited]').val();
        this.fields.reason = $('textarea[name=reason]').val();
        this.fields.comment = $('textarea[name=comment]').val();
        // this.fields.english_skills = $('input[name=english_skills]').val();
        // this.fields.korean_skills = $('input[name=korean_skills]').val();
        // this.fields.financial_programme = $('input[name=financial_programme]').val();
        // this.fields.messenger = $('input[name=messenger]').val();
        
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

    fetchdata() {
       window.axios.defaults.headers.common = {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        };
        axios.get('/api/profile').then(response => {
          //this.fields = response.data;
          this.fields.nationality = response.data.profile.nationality;
          this.fields.dateofbirth = response.data.profile.dateofbirth;
          this.fields.country = response.data.profile.country;
          this.fields.city = response.data.profile.city;
          this.fields.messengerid = response.data.profile.messengerid;
          this.fields.finaleducation = response.data.profile.finaleducation;
          this.fields.grade = response.data.profile.grade;
          this.fields.occupation = response.data.profile.occupation;
          this.fields.countriesvisited = response.data.profile.countriesvisited;
          this.fields.reason = response.data.profile.reason;
          this.fields.comment = response.data.profile.comment;
          this.fields.korean_skills = response.data.profile.korean_skills;
          this.fields.english_skills = response.data.profile.english_skills;
          this.fields.financial_programme = response.data.profile.financial_programme;
          this.fields.messenger = response.data.profile.messenger;
          
        }).catch(error => {
          console.log(error);   
        });
    },
     

   

     

   }
        

}
</script>

