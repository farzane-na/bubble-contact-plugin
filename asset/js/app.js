const bubbleContactBtn=document.querySelector(".bubble-contact_btn")
const bubbleContactList=document.querySelector(".bubble-contact_list")
const bubbleContactToggleBtn=document.querySelector(".bubble-contact_toggle-btn")
const toggleBubbleContact=()=>{
    bubbleContactList.classList.toggle("bubble-contact_list--open")
    bubbleContactToggleBtn.classList.toggle("bubble-contact_toggle-btn--open")
}
console.log(bubbleContactBtn)
bubbleContactBtn.addEventListener("click",toggleBubbleContact)