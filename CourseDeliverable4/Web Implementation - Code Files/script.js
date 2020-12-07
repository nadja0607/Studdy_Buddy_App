var btn= document.getElementById("activeBtn")

btn.addEventListener("click", function() {
    if (btn.innerHTML == "Search")
    	{btn.innerHTML = "Search again";
		 btn.value= "Search again";}
   //  else {btn.innerHTML = "Active";
			// btn.value= "Active";}
			

    });



