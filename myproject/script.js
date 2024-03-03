







let mainbtn = document.querySelector("#mainbtn")
let linklist = document.querySelector('.listlink')
let counter = 1;
mainbtn.addEventListener("click", () => {
   if (counter == 1) {
      linklist.style.display = "block";
      counter = counter + 1;
   } else {
      linklist.style.display = "none";

      counter = counter - 1;
   }
   return counter



})

// let leftArrow = document.querySelector(".left-row");
// let rightArrow = document.querySelector(".right-row");

// let card =[
//    {name:"hrituaj",heading:"Weight Lifting", peragraph:"Embrace the essence of strength as we delve into its various dimensions physical mental and emotional.",join:"Join Now"},
//    {name:"shiva",heading:"Weight Lifting", peragraph:"Embrace the essence of strength as we delve into its various dimensions physical mental and emotional.",join:"Join Now"},
//    {name: "sachin",heading:"Weight Lifting", peragraph:"Embrace the essence of strength as we delve into its various dimensions physical mental and emotional.",join:"Join Now"},
//    {name: "ragav",heading:"Weight Lifting", peragraph:"Embrace the essence of strength as we delve into its various dimensions physical mental and emotional.",join:"Join Now"},
//    {name: "rahul",heading:"Weight Lifting", peragraph:"Embrace the essence of strength as we delve into its various dimensions physical mental and emotional.",join:"Join Now"},
//    {name: "saurabh",heading:"Weight Lifting", peragraph:"Embrace the essence of strength as we delve into its various dimensions physical mental and emotional.",join:"Join Now"},
//    {name: "shruti",heading:"Weight Lifting", peragraph:"Embrace the essence of strength as we delve into its various dimensions physical mental and emotional.",join:"Join Now"}
// ];
// let temp_new_card = document.querySelector(".temp-new-card");
// let explor_grid = document.querySelector(".explore__grid")

// let newCard = card.forEach(()=>{
//    let cardGen = temp_new_card.content.cloneNode(true);
//    cardData();
//    explor_grid.appendChild(cardGen);
// })
// function cardData(cardclon){
//    let header = cardclon.querySelector(".header");
//    let peragraph =cardclon.querySelector(".peragraph");

//    header=card.heading;
//    peragraph=card.peragraph;
// }
// let review_card = [
//    {
//       peragraph: "What truly sets this gym apart is their expert team of trainers.Ttrainers are knowledgeable, approachable, and genuinely invested in helping members achieve their fitness goals. They take the time to understand individual needs and create personalized workout plans,ensuring maximum results and safety.", ratting: "⭐⭐⭐⭐⭐",
//       img:"https://images.unsplash.com/photo-1554355605-ce6377deda4f?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
//       name: "Shiva Sharma", Role: "Frontend Developer"
//    },
//    {
//       peragraph: "What truly sets this gym apart is their expert team of trainers.Ttrainers are knowledgeable, approachable, and genuinely invested in helping members achieve their fitness goals. They take the time to understand individual needs and create personalized workout plans,ensuring maximum results and safety.", ratting: "⭐⭐⭐⭐",
//       img:"https://media.istockphoto.com/id/1332027056/photo/portrait-of-smiling-young-woman-talking-on-a-smartphone-on-white-background.jpg?s=1024x1024&w=is&k=20&c=BvGKxYjjYQdx5JgUoDs_QucJQAxPbzYiUMNcD0jKoug=",
//       name: "mohit Sharma", Role: "Frontend Developer"
//    },
//    {
//       peragraph: "What truly sets this gym apart is their expert team of trainers.Ttrainers are knowledgeable, approachable, and genuinely invested in helping members achieve their fitness goals. They take the time to understand individual needs and create personalized workout plans,ensuring maximum results and safety.", ratting: "⭐⭐⭐",
//       img:"https://images.unsplash.com/photo-1528222354212-a29573cdb844?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
//       name: "golu Sharma", Role: "Frontend Developer"
//    },
//    {
//       peragraph: "What truly sets this gym apart is their expert team of trainers.Ttrainers are knowledgeable, approachable, and genuinely invested in helping members achieve their fitness goals. They take the time to understand individual needs and create personalized workout plans,ensuring maximum results and safety.", ratting: "⭐⭐⭐⭐⭐",
//       img:"https://images.unsplash.com/photo-1526746323784-6bc814d79273?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
//       name: "sachin yadav", Role: "Frontend Developer"
//    },
// ]


// let mycard = review_card.map((item,index)=>{
//    return `<div class="section__container review__container">
//    <span><i class="ri-double-quotes-r"></i></span>
//    <div class="review__content">
//      <h4>MEMBER REVIEW</h4>
//      <p>
//        What truly sets this gym apart is their expert team of trainers. The
//        trainers are knowledgeable, approachable, and genuinely invested in
//        helping members achieve their fitness goals. They take the time to
//        understand individual needs and create personalized workout plans,
//        ensuring maximum results and safety.
//      </p>
     
//      <div class="review__rating">
//        <span><i class="ri-star-fill"></i></span>
//        <span><i class="ri-star-fill"></i></span>
//        <span><i class="ri-star-fill"></i></span>
//        <span><i class="ri-star-fill"></i></span>
//        <span><i class="ri-star-half-fill"></i></span>
//      </div>
//      <div class="review__footer">
//        <div class="review__member">
//          <img src="./Assets/member.jpg" alt="member" />
//          <div class="review__member__details">
//            <h4>Shiva Sharma</h4>
//            <p>FrontEnd Developer</p>
//          </div>
//        </div>
//    `
// })


// let review = document.querySelector(".review");
// let temp_review = document.querySelector(".temp-review");

// temp_review.innerHTML=mycard;




// let review_left = document.querySelector(".review-left")
// let review_right = document.querySelector(".review-right")




