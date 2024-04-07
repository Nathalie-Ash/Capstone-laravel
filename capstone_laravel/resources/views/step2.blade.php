<x-stepLayout>






    <div id="topNav" style="width: 80%;text-align: center;margin: auto;padding-top: 2%;">
        <p style="color:#FF6F28; font-size: 20px;text-align: left;">Step 2</p>
        <p id="textStyle"style="text-align: left;">Tell Us More About You!</p>


    </div>
    <form method="POST" action="{{ route('step2') }}">

        @csrf

        <section id="steps" style="padding-top: 20px;padding-left: 30px;display: flex; flex-direction: column;">
            <!-- <div id="steps"> -->

            <div class="container text-center" style="flex: 1;">
                <div class="row">
                    <div class="col">
                        <img class="animated-element" src={{ asset('images/image1.png') }}>
                        <div id="division1">
                            <h1 id="step-title">Pick 3 Outdoor Activities You Enjoy</h1>
                            <div class="dropdown" style="padding-top: 5px;">
                                <button class="btn btn-secondary dropdown-toggle" id="outdoorDropdownMenuButton1"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                    style="background-color: #579792;border: none;">
                                    Select Activity 1
                                </button>
                                <ul class="dropdown-menu" style="background-color: #579792;width: 90%;border: none;"
                                    id="outdoorItem1" name="outdoorItem1">
                                </ul>
                                <input type="hidden" id="outdoorItem1Hidden" name="outdoorItem1">

                            </div>
                            <div class="dropdown" style="padding-top: 10px;">
                                <button class="btn btn-secondary dropdown-toggle" id="outdoorDropdownMenuButton2"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                    style="background-color: #579792;border: none;">
                                    Select Activity 2
                                </button>
                                <ul class="dropdown-menu" style="background-color: #579792;width: 90%;border: none;"
                                    id="outdoorItem2" name="outdoorItem2">
                                </ul>
                                <input type="hidden" id="outdoorItem2Hidden" name="outdoorItem2">

                            </div>
                            <div class="dropdown" style="padding-top: 10px;">
                                <button class="btn btn-secondary dropdown-toggle" id="outdoorDropdownMenuButton3"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                    style="background-color: #579792;border: none;">
                                    Select Activity 3
                                </button>
                                <ul class="dropdown-menu" style="background-color: #579792;width: 90%;border: none;"
                                    id="outdoorItem3" name="outdoorItem3">
                                </ul>
                                <input type="hidden" id="outdoorItem3Hidden" name="outdoorItem3">

                            </div>


                        </div>
                    </div>
                    <div class="col">
                        <img class="animated-element" src={{ asset('images/image1.png') }}>
                        <div id="division2" class="input">

                            <h1 id="step-title">Pick 3 Indoor Activities You Enjoy</h1>
                            <div class="dropdown" style="padding-top: 5px;">
                                <button class="btn btn-secondary dropdown-toggle" id="indoorDropdownMenuButton1"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                    style="background-color: #579792;border: none;">
                                    Select Activity 1
                                </button>
                                <ul class="dropdown-menu" style="background-color: #579792;width: 90%;border: none;"
                                    id="indoorItem1">
                                </ul>
                                <input type="hidden" id="indoorItem1Hidden" name="indoorItem1">

                            </div>
                            <div class="dropdown" style="padding-top: 10px;">
                                <button class="btn btn-secondary dropdown-toggle" id="indoorDropdownMenuButton2"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                    style="background-color: #579792;border: none;">
                                    Select Activity 2
                                </button>
                                <ul class="dropdown-menu" style="background-color: #579792;width: 90%;border: none;"
                                    id="indoorItem2">
                                </ul>
                                <input type="hidden" id="indoorItem2Hidden" name="indoorItem2">

                            </div>
                            <div class="dropdown" style="padding-top: 10px;">
                                <button class="btn btn-secondary dropdown-toggle" id="indoorDropdownMenuButton3"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                    style="background-color: #579792;border: none;">
                                    Select Activity 3
                                </button>
                                <ul class="dropdown-menu" style="background-color: #579792;width: 90%;border: none;"
                                    id="indoorItem3" name="indoorItem3">
                                </ul>
                                <input type="hidden" id="indoorItem3Hidden" name="indoorItem3">

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <img class="animated-element" src={{ asset('images/image1.png') }}>
                        <div id="division3" class="input">

                            <h1 id="step-title">Pick 3 </h1>
                            <input type="text" placeholder="1." style="margin-bottom: 15px;">
                            <input type="text" placeholder="2." style="margin-bottom: 15px;">
                            <input type="text" placeholder="3." style="margin-bottom: 15px;">

                        </div>
                    </div>
                </div>
            </div>


            </div>
            <div id="button-nav">
                <button type="button" onclick="goToPrevPage()" class="btn"
                    style="background-color:#a19e9e; width: 15%;border-right:50px;color:white;font-size: larger;">BACK</button>
                <button type="submit" onclick="goToNextPage()" class="btn"
                    style="background-color:#FF6F28; width: 15%;border-right:30px;color:white;font-size: larger;">NEXT</button>
            </div>

        </section>
        <script>
            function storeStep2Data() {
                var formData = {
                    outdoorItem1: document.getElementById('outdoorItem1Hidden').value,
                    outdoorItem2: document.getElementById('outdoorItem2Hidden').value,
                    outdoorItem3: document.getElementById('outdoorItem3Hidden').value,
                    indoorItem1: document.getElementById('indoorItem1Hidden').value,
                    indoorItem2: document.getElementById('indoorItem2Hidden').value,
                    indoorItem3: document.getElementById('indoorItem3Hidden').value,
                };
                localStorage.setItem('step2Data', JSON.stringify(formData));
            }
        </script>


    </form>
    </div>
    <script>
    
        document.addEventListener("DOMContentLoaded", function() {

            // Array of items for the dropdown
            var outdoorActivities = [
                "Running",
                "Swimming",
                "Basketball",
                "Ziplining",
                "Football"
            ];

            // Get the dropdown menu elements
            var outdoorDropdownMenu1 = document.getElementById("outdoorItem1");
            var outdoorDropdownMenu2 = document.getElementById("outdoorItem2");
            var outdoorDropdownMenu3 = document.getElementById("outdoorItem3");

            // Iterate over the array and create <li> elements for each dropdown
            outdoorActivities.forEach(function(outdoorActivity) {
                var listItem1 = document.createElement("li");
                var listItem2 = document.createElement("li");
                var listItem3 = document.createElement("li");

                var divider1 = document.createElement("hr");
                var divider2 = document.createElement("hr");
                var divider3 = document.createElement("hr");

                listItem1.innerHTML =
                    '<a class="dropdown-item" href="#" style="color:white;" onclick="updateButtonText(this, \'outdoorItem1\', \'outdoorDropdownMenuButton1\')">' +
                    outdoorActivity + '</a>';
                listItem2.innerHTML =
                    '<a class="dropdown-item" href="#" style="color:white;" onclick="updateButtonText(this, \'outdoorItem2\', \'outdoorDropdownMenuButton2\')">' +
                    outdoorActivity + '</a>';
                listItem3.innerHTML =
                    '<a class="dropdown-item" href="#" style="color:white;" onclick="updateButtonText(this, \'outdoorItem3\', \'outdoorDropdownMenuButton3\')">' +
                    outdoorActivity + '</a>';

                outdoorDropdownMenu1.appendChild(listItem1);
                outdoorDropdownMenu1.appendChild(divider1);

                outdoorDropdownMenu2.appendChild(listItem2);
                outdoorDropdownMenu2.appendChild(divider2);

                outdoorDropdownMenu3.appendChild(listItem3);
                outdoorDropdownMenu3.appendChild(divider3);
            });

            var indoorActivities = [
                "Reading",
                "Writing",
                "Waching TV",
                "Drawing",
                "Meditating"
            ];

            // Get the dropdown menu elements
            var indoorDropdownMenu1 = document.getElementById("indoorItem1");
            var indoorDropdownMenu2 = document.getElementById("indoorItem2");
            var indoorDropdownMenu3 = document.getElementById("indoorItem3");

            // Iterate over the array and create <li> elements for each dropdown
            indoorActivities.forEach(function(indoorActivity) {
                var listItem1 = document.createElement("li");
                var listItem2 = document.createElement("li");
                var listItem3 = document.createElement("li");

                var divider1 = document.createElement("hr");
                var divider2 = document.createElement("hr");
                var divider3 = document.createElement("hr");

                listItem1.innerHTML =
                    '<a class="dropdown-item" href="#" style="color:white;" onclick="updateButtonText(this, \'indoorItem1\', \'indoorDropdownMenuButton1\')">' +
                    indoorActivity + '</a>';
                listItem2.innerHTML =
                    '<a class="dropdown-item" href="#" style="color:white;" onclick="updateButtonText(this, \'indoorItem2\', \'indoorDropdownMenuButton2\')">' +
                    indoorActivity + '</a>';
                listItem3.innerHTML =
                    '<a class="dropdown-item" href="#" style="color:white;" onclick="updateButtonText(this, \'indoorItem3\', \'indoorDropdownMenuButton3\')">' +
                    indoorActivity + '</a>';

                indoorDropdownMenu1.appendChild(listItem1);
                indoorDropdownMenu1.appendChild(divider1);

                indoorDropdownMenu2.appendChild(listItem2);
                indoorDropdownMenu2.appendChild(divider2);

                indoorDropdownMenu3.appendChild(listItem3);

            });

            function updateHiddenInput(selectedItem, hiddenInputId) {
                var selectedValue = selectedItem.textContent.trim();
                document.getElementById(hiddenInputId).value = selectedValue;
            }

            // Function to handle click events on dropdown items
            function handleDropdownItemClick(event, dropdownMenuId, hiddenInputId) {
                var selectedItem = event.target;
                updateHiddenInput(selectedItem, hiddenInputId);
            }

            // Add event listeners for each dropdown menu
            function addEventListenersToDropdowns() {
                var dropdownMenus = document.querySelectorAll(".dropdown-menu");
                dropdownMenus.forEach(function(dropdownMenu) {
                    dropdownMenu.addEventListener("click", function(event) {
                        var dropdownMenuId = dropdownMenu.id;
                        var hiddenInputId = dropdownMenuId + "Hidden";
                        handleDropdownItemClick(event, dropdownMenuId, hiddenInputId);
                    });
                });
            }

            // Call the function to add event listeners when the DOM is loaded
            addEventListenersToDropdowns();
            populateStep2Fields();
        });




        function updateButtonText(selectedItem, dropdownMenuId, dropdownButtonId) {
            var buttonText = $(selectedItem).text();
            var dropdownMenu = document.getElementById(dropdownMenuId);
            var dropdownButton = document.getElementById(dropdownButtonId);


            // Update the button text
            dropdownButton.innerText = buttonText;
        }

        function populateStep2Fields() {
        var step2Data = JSON.parse(localStorage.getItem('step2Data'));
        if (step2Data) {
            var dropdownMenu = document.getElementById(dropdownMenuId);
            var dropdownButton = document.getElementById(dropdownButtonId);

            document.getElementById('outdoorDropdownMenuButton1').value = step2Data.outdoorItem1;
            document.getElementById('outdoorDropdownMenuButton2').value = step2Data.outdoorItem2;
            document.getElementById('outdoorDropdownMenuButton3').value = step2Data.outdoorItem3;
            document.getElementById('indoorItem1Hidden').value = step2Data.indoorItem1;
            document.getElementById('indoorItem2Hidden').value = step2Data.indoorItem2;
            document.getElementById('indoorItem3Hidden').value = step2Data.indoorItem3;
            
        }
    }
   
    function goToPrevPage() {
            // Store Step 2 data before navigating back to Step 1
            storeStep2Data();
            // Redirect to Step 1
            window.location.href = "{{ route('step1') }}";
        }
        function goToNextPage() {
            // Store Step 2 data before navigating back to Step 1
            storeStep2Data();
            // Redirect to Step 1
            window.location.href = "{{ route('step2') }}";
        }

        function storeStep2Data() {
                var formData = {
                    outdoorItem1: document.getElementById('outdoorItem1Hidden').value,
                    outdoorItem2: document.getElementById('outdoorItem2Hidden').value,
                    outdoorItem3: document.getElementById('outdoorItem3Hidden').value,
                    indoorItem1: document.getElementById('indoorItem1Hidden').value,
                    indoorItem2: document.getElementById('indoorItem2Hidden').value,
                    indoorItem3: document.getElementById('indoorItem3Hidden').value,
                };
                localStorage.setItem('step2Data', JSON.stringify(formData));
            }
    </script>
</x-stepLayout>
