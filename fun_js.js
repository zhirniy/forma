
 window.onload = function () {
 
            function $s(id) { return document.getElementById(id); }

            var e1 = $s("p1");
            var e2 = $s("p2");
            var e3 = $s("p3");
            var e203 = $s("tr203");
            var e303 = $s("tr303");
            var e5 = $s("b1");
            var e6 = $s("form");
            var e7 = $s("tt2");
        
            e6.addEventListener("reset",
                function () {
                   setTimeout(function(){
                    e2.className = 'class01';
                    e3.className = 'class01';
                    e5.className = 'class01';
                    e7.className = 'class01';
                    e203.className = 'class01';
                    e303.className = 'class01';
                  },50);

                  

                          },
            false);

         
                  
}


		 function $s(id) { return document.getElementById(id); }
		
        function createNewChild1(a,i) {
        var b = a+1;
        var z = i-6;
        var k=i-10;
        var l = i+5;
        var n = k +5;
           if ($s("tr"+a).style.display == "none") {
               $s("tr"+a).style.display = "table-row";
               $s("tt"+b).style.display = "block";
               for (k; k < z; k++)
                 {
                 $s("tr"+k).setAttribute("required", "required");
                 }
            }



           else {
               $s("tr"+b).style.display = "table-row";
               $s("tt"+a).style.display = "none";
               $s("tt"+b).style.display = "block";
               for (i; i < l; i++)
                 {
                 $s("tr"+i).setAttribute("required", "required");
                 }
               }
     }
       function removNewChild1(a,i) {
        var b = a+1;
        var z = i-6;
        var k=i-10;
        var l = i+5;
        var n = k +5;
           if ($s("tr" + b).style.display == "table-row")
        {
              $s("tr"+b).style.display = "none";
              $s("tt"+a).style.display = "table-row";
              for (i; i < l; i++)
                {
                 $s("tr"+i).removeAttribute("required");
                 $s("tr"+i).value = "";
                }

        }
           else {
               $s("tr"+a).style.display = "none";
               $s("tt"+a).style.display = "table-row";
               $s("tt"+b).style.display = "none";
              
               for (k; k < z; k++)
               {
                 $s("tr"+k).removeAttribute("required");
                 $s("tr"+k).value = "";
              }
              
           }
       }


       function bcd() {
       document.getElementById("id2224").style.backgroundImage = "url('TCS.jpg')";}

        function bcd1() {
      document.getElementById("id2224").style.backgroundImage = "url('566.jpg')";}

        function bcd2() {
       document.getElementById("id2224").style.backgroundImage = "url('TSI.jpg')";}

       
       function bcd4() {
       document.getElementById("id2224").style.backgroundImage = "url('Algos.jpg')";
}
       




 