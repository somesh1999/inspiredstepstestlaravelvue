<template>
<section id="contact-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-from mt-30">
                    <div class="section-title">
                        <h4>My Profile</h4>
                    </div> <!-- section title -->
                    <div class="main-form pt-45">
                       <table v-if="results.profile">
                           <tr>
                               <th>Name</th>
                               <td>{{results.name}}</td>
                           </tr>
                             <tr>
                               <th>Email</th>
                               <td>{{results.email}}</td>
                           </tr>
                             <tr>
                               <th>Contact Number</th>
                               <td>{{results.profile.contact_number}}</td>
                           </tr>
                           <tr>
                               <th>Nationality</th>
                               <td>{{results.profile.nationality}}</td>
                           </tr>
                           <tr>
                               <th>Date of birth</th>
                               <td>{{results.profile.dateofbirth | formatDate}}</td>
                           </tr>
                           <tr>
                               <th>Country</th>
                               <td>{{results.profile.country}}</td>
                           </tr>
                           <tr>
                               <th>City</th>
                               <td>{{results.profile.city}}</td>
                           </tr>
                           <tr>
                               <th>Messenger</th>
                               <td>{{results.profile.messenger}}</td>
                           </tr>
                            <tr>
                               <th>Messenger ID</th>
                               <td>{{results.profile.messengerid}}</td>
                           </tr>
                            <tr>
                               <th>Final Education</th>
                               <td>{{results.profile.finaleducation}}</td>
                           </tr>
                            <tr>
                               <th>Grade</th>
                               <td>{{results.profile.grade}}</td>
                           </tr>
                            <tr>
                               <th>Occupation</th>
                               <td>{{results.profile.occupation}}</td>
                           </tr>
                            <tr>
                               <th>Countries visited</th>
                               <td>{{results.profile.countriesvisited}}</td>
                           </tr>
                            <tr>
                               <th>Financial Programme</th>
                               <td>{{results.profile.financial_programme}}</td>
                           </tr>

                            <tr>
                               <th>Korean skills</th>
                               <td>{{results.profile.korean_skills}}</td>
                           </tr>
                            <tr>
                               <th>English skills</th>
                               <td>{{results.profile.english_skills}}</td>
                           </tr>

                            <tr>
                               <th>Reason</th>
                               <td>{{results.profile.reason}}</td>
                           </tr>
                            <tr>
                               <th>Comments</th>
                               <td>{{results.profile.comment}}</td>
                           </tr>
                           
                       </table>
                    </div> <!-- main form -->
                </div> <!--  contact from -->
            </div>
            
        </div> <!-- row -->
    </div> <!-- container -->
</section>
</template>

<script>
import moment from 'moment';

export default {
    data(){
       return{
           results: [],
       }
   },

    mounted(){
       this.fetchdata();
    },
    components: {
   
   },
   

   methods:{
      
    fetchdata() {
       window.axios.defaults.headers.common = {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        };
        axios.get('/api/profile').then(response => {
          this.results = response.data;
        }).catch(error => {
          console.log(error);   
        });
    },
     

   }
        

}
</script>
<style scoped>
table{
    font-size:18px;
    width:100%;
     border-collapse:separate; 
  border-spacing: 0 1em;
}

</style>
