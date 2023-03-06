let registerForm = document.querySelector("#register-form")
let inputs = document.querySelectorAll(".input-text")



// const addInputErrorClass = (elem, className) => {
//   elem.classList.add(className)
//   if (elem.previousElementSibling) {
//     elem.previousElementSibling.classList.add(className)
//   }
// }

const checkForEmpty = (inputElem) => {
  // let errors = []
  // console.log(inputElem)
  // ====================== GRABBING INPUT ELEMENTS  ===========================
  // inputElem.forEach((input, i) => {
  //   // console.log(input)
  //   let msg = input.previousElementSibling.children[1];
  //   if (input.value === '') {
  //     errors.push(input)
  //     addInputErrorClass(input, 'error')
  //     addInputErrorClass(msg, 'error')
  //   }
  // })
}

// registerForm.addEventListener("submit", (e) => {
//   e.preventDefault()
//   inputs.forEach(element => {
//     checkForEmpty(element)
//     //console.log(element)
//   });
// })