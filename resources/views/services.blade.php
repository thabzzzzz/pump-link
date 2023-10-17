@include('format')



      <div class="container" >
         <div class="row1">  

         
         <section class="get-in-touch">
   <h4>Get in touch</h4>


   <form class="contact-form row">
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Name :</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="email" required>
         <label class="label" for="email">E-mail :</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="company" class="input-text js-input" type="text" required>
         <label class="label lbl" for="company">Company Name :</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input id="phone" class="input-text js-input" type="text" required>
         <label class="label lbl" for="phone">Contact Number :</label>
         
      </div>
      <p id="demo"></p>

      <div class="form-group col-md-6 selectsRow">
         <label for="natureOfQuery" class="nat natLabel">Nature of Query :</label>
         <select id="natureOfQuery" class="form-control">
           <option selected>Sale</option>
           <option>Financial</option>
           <option>Consultation</option>
         </select>
       </div>


       <div class="form-group col-md-6 selectsRow">
         <label for="contactMethod" class="nat contactMethodLebel">Prefered contact method :</label>
         <select id="contactMethod" class="form-control">
           <option selected>Phone</option>
           <option>Email</option>
           
         </select>
       </div>
       
      <div class="form-field col-lg-12 ">
      <label for="queryText" class="messageLabel">Message :</label>
      <textarea class="form-control" id="queryText" rows="3"></textarea>
      </div>

      <div class="form-field col-lg-12">
         <button class="submit-btn testbutton button" type="submit" value="Submit" > Submit</button>
      

      </div>
   </form>

</section>
         
         </div>

         <hr class="double">

         <div class="row">

            <h1>FAQ</h1>

            <div>
            <section id="faq" class="faq">
  
    <div style="text-align:center;">
      
    </div>

    <div class="faq-list">
      <ul>
        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq-list-1" class="collapsed"><p class="faqH">What is lorem?</p> <i class="bi bi-arrow-down icon-show" aria-hidden="true"></i><i class="bi bi-arrow-up icon-close"></i></a>
           <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
             <p class="faqP">
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
             </p>
           </div>
         </li>

        <li>
         <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed"><p class="faqH">What is lorem?</p> <i class="bi bi-arrow-down icon-show" aria-hidden="true"></i><i class="bi bi-arrow-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p class="faqP">
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
          </div>
        </li>

        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"><p class="faqH">What is lorem?</p> <i class="bi bi-arrow-down icon-show" aria-hidden="true"></i><i class="bi bi-arrow-up icon-close"></i></a>
           <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
             <p class="faqP">
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
             </p>
           </div>
         </li>

         <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed"><p class="faqH">What is lorem?</p> <i class="bi bi-arrow-down icon-show" aria-hidden="true"></i><i class="bi bi-arrow-up icon-close"></i></a>
           <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
             <p class="faqP">
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
             </p>
           </div>
         </li>

       

     

  



      </ul>
    </div>

 
</section>

            </div>

         </div>

      

         
   
     
      </div>


   
   
      <!-- Footer -->
      @include('footer')