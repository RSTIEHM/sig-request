let registerForm = document.querySelector("#register-form")
let inputs = document.querySelectorAll(".input-text")
let page1Next = document.querySelector("#page-1-next");

let appState = {
  currentPage: 1,
  employee: {}
}

console.log(appState)
page1Next.addEventListener("click", () => {
  let empObj = {}
  let empRadio = document.querySelectorAll(".emp-radio")
  let empInfo = document.querySelectorAll(".page-1-empInfo")

  empRadio.forEach(item => {
    if (item.type === 'radio' && item.checked) {
      empObj["employeeType"] = item.dataset.id
    }
  })

  empInfo.forEach(item => {
      empObj[item.dataset.id] = item.value
  })
  appState.employee = empObj
  // Object.getOwnPropertyNames(empInfo).forEach((val, idx, array) => {
  //   console.log(`${val} -> ${empObj[val]}`);
  //   console.log(val, "VAL")
  // });

  // for (const val in empObj) {
  //   if (Object.hasOwnProperty.call(empObj, val)) {
  //     let objKey = Object.keys(empObj)
  //     appState.employee[objKey] = empObj[val]
  //   }
  // }
  // LOOP OVER THE OBJ AND INSERT INTO GLOBAL EMPLOYEE

  console.log(empObj, "EMP OBJ")
  console.log(appState, "APP STATE")
  appState.currentPage = appState.currentPage + 1

})

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
//   console.log("EMPTY")
//   inputs.forEach(element => {
//     checkForEmpty(element)
//     console.log(element)
//   });
// })