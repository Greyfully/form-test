<div>

   <?php include('vars.php') ?>
	
	<div id="messaging">
		<?php include('messaging/index.php') ?>
	</div>

    
   <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
          <div class="border-t border-gray-200"></div>
        </div>
      </div>
   <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">

      <h2>
         Please take a moment to review the information below to ensure we have your latest contact details.
      </h2>
    
      <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3>Personal Information</h3>
              <p>
                Use a permanent address where you can receive mail.
              </p>
            </div>
          </div>
          <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="shadow overflow-hidden sm:rounded-md">
               <div class="px-4 py-5 sm:p-6">
               <div class="grid grid-cols-6 gap-6">
                  <div class="col-span-6 sm:col-span-3">
                  
                     <label for="first_name">First name</label>
                     <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md">
                  </div>
   
                  <div class="col-span-6 sm:col-span-3">
                     <label for="last_name">Last name</label>
                     <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md">
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                     <label for="grey-stepp">Grey Stepp</label>
                     <input type="text" name="grey-stepp" id="grey-stepp" autocomplete="grey-stepp" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md">
                  </div>
   
                  <div class="col-span-6 sm:col-span-4">
                     <label for="email">Email address</label>
                     <input type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md">
                  </div>

               </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
          <div class="border-t border-gray-200"></div>
        </div>
      </div>
    
      <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3>Subscriptions</h3>
              <p>
                Decide which communications you'd like to receive and how.
              </p>
            </div>
          </div>
          <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="shadow overflow-hidden sm:rounded-md">
               <div class="px-4 py-5 space-y-6 sm:p-6">
               <fieldset id="subscriptions">
                  <legend>Email Subscriptions</legend>
                  <div class="mt-4 space-y-4">
                     <div class="flex items-start">
                     <div class="flex items-center h-5">
                        <input id="subscriptions_Newsletter" value="Newsletter" name="newsletter" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 rounded">
                     </div>
                     <div class="ml-3 text-sm">
                        <label for="newsletter" class="font-medium">Newsletter</label>
                        <p>Get newletter sent to you.</p>
                     </div>
                     </div>
                     <div class="flex items-start">
                     <div class="flex items-center h-5">
                        <input id="subscriptions_Daily-Question" value="Daily Question" name="daily-question" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                     </div>
                     <div class="ml-3 text-sm">
                        <label for="daily-question" class="font-medium">Daily Question</label>
                        <p>Get sent a question everyday.</p>
                     </div>
                     </div>
                     <div class="flex items-start">
                     <div class="flex items-center h-5">
                        <input id="subscriptions_Spam" value="Spam" name="spam" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                     </div>
                     <div class="ml-3 text-sm">
                        <label for="spam" class="font-medium">Spam</label>
                        <p>Get sent Spam!</p>
                     </div>
                     </div>
                     <div class="flex items-start">
                     <div class="flex items-center h-5">
                        <input id="subscriptions_Grey-Stepp" value="Grey Stepp" name="grey-stepp" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                     </div>
                     <div class="ml-3 text-sm">
                        <label for="spam" class="font-medium">Grey Stepp</label>
                        <p>All the Grey Stepp news you could ever want!</p>
                     </div>
                     </div>
                  </div>
               </fieldset>
               </div>
               <div class="px-4 py-3 text-right sm:px-6">
               <button id="optout" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-black hover:bg-red-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Optout
               </button>
               <button id="saveChanges" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-700 hover:bg-red-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Save
               </button>
               </div>
            </div>
          </div>
        </div>
      </div>

   </div>

</div>