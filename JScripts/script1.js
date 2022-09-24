// // filter array
// let filterarray = [];
//
// // gallery card array
//
// let galleryarray = [{
//     id: 1,
//     name: "IEEE",
//     src: "./images/watch1.jpg",
//     desc: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
//   },
//   {
//     id: 2,
//     name: "Venturesity",
//     src: "./images/iphone1.jpg",
//     desc: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
//   },
//   {
//     id: 3,
//     name: "Pravega",
//     src: "./images/phone2.jpg",
//     desc: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
//   },
//   {
//     id: 4,
//     name: "MAD",
//     src: "./images/watch2.jpg",
//     desc: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
//   },
//   {
//     id: 5,
//     name: "TIFAG",
//     src: "./images/headphone1.jpg",
//     desc: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
//   },
//   {
//     id: 6,
//     name: "ADG",
//     src: "./images/watch3.jpg",
//     desc: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
//   }
// ];
//
//
// showgallery(galleryarray);
//
//
// // create function to show card
//
//
// function showgallery(curarra) {
//   document.getElementById("card1").innerText = "";
//   for (var i = 0; i < curarra.length; i++) {
//     document.getElementById("card1").innerHTML += `
//         <div class="col-md-4 mt-3" >
//            <div class="card1 p-3 ps-5 pe-5">
//                <h4 class="text-capitalize text-center">${curarra[i].name}</h4>
//
//           <img src="${curarra[i].src}" width="100%" height="150px"/>
//           <input type="button" id="cardbtn" value="Show"/>
//           </div>
//           </div>
//        `
//   }
//
// }
// //<button class="btn btn-primary" id="cardbtn">Show</button>
// // For Live Searching Product
// document.getElementById("cardbtn").addEventListener("click", function() {
//
//   showgallery(galleryarray);
//
//
//   // create function to show card
//
//
//   function showgallery(curarra) {
//     document.getElementById("card1").innerText = "";
//     for (var i = 0; i < curarra.length; i++) {
//       document.getElementById("card1").innerHTML += `
//           <div class="col-md-4 mt-3" >
//              <div class="card1 p-3 ps-5 pe-5">
//                  <h4 class="text-capitalize text-center">${curarra[i].name}</h4>
//
//             <img src="${curarra[i].src}" width="100%" height="150px"/>
//             <p class="mt-2 text-center">${curarra[i].desc}</p>
//             </div>
//             </div>
//          `
//     }
//
//   }
// // });
//
// document.getElementById("btnsearch").addEventListener("click", function() {
//   let text = document.getElementById("myinput").value.toLowerCase();
//
//   filterarray = galleryarray.filter(function(a) {
//     if (a.name.toLowerCase().includes(text)) {
//       return a.name;
//     }
//
//   });
//   if (this.value == "") {
//     showgallery(galleryarray);
//   } else {
//     if (filterarray == "") {
//       document.getElementById("para").style.display = 'block'
//       document.getElementById("card1").innerHTML = "";
//     } else {
//       showgallery(filterarray);
//       document.getElementById("para").style.display = 'none'
//     }
//   }
//
// });
