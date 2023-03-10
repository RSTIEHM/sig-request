let registerForm = document.querySelector("#register-form")
let inputs = document.querySelectorAll(".input-text")
let page1Next = document.querySelector("#page-1-next");
let page2Next = document.querySelector("#page-2-next");
let page3Next = document.querySelector("#page-3-next");
let page1 = document.querySelector(".page-1")
let page2 = document.querySelector(".page-2")
let page3 = document.querySelector(".page-3")
let loading = document.querySelector(".loading")
let appState = {
  currentPage: 1,
  employee: {}
}


page1Next.addEventListener("click", () => {
  // SHOW LOADING =========
  loading.style.display = "flex"

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
 
  page1.style.display = "none"
 
  setTimeout(() => {
    loading.style.display = "none"
  }, 500);
  page2.style.display = "block"
  appState.currentPage = appState.currentPage + 1

})

page2Next.addEventListener("click", () => {
  // SHOW LOADING =========
  loading.style.display = "flex"
  let empObj = {}
  let empComputer = document.querySelectorAll(".emp-computer")
  let empComputerText = document.querySelectorAll(".comp-input-text")

  empComputer.forEach(item => {
    if (item.type === 'checkbox' && item.checked) {
      empObj[item.name] = "Yes"
    }
  })

  empComputerText.forEach(item => {
    empObj[item.dataset.id] = item.value
  })

  appState.currentPage = appState.currentPage + 1
  appState.tech = empObj

  setTimeout(() => {
    loading.style.display = "none"
  }, 500);
  page2.style.display = "none"
  page3.style.display = "block"
})

page3Next.addEventListener("click", () => {
  // SHOW LOADING =========
  loading.style.display = "flex"
  let empObj = {}
  let empEmail = document.querySelectorAll(".emp-email")
  let empSoftware = document.querySelectorAll(".emp-software")
  console.log(empObj)
  empEmail.forEach(item => {
    if (item.type === 'checkbox' && item.checked) {
      empObj[item.name] = "Yes"
    }
  })
  empSoftware.forEach(item => {
    if (item.type === 'checkbox' && item.checked) {
      empObj[item.name] = "Yes"
    }
  })

  // empComputerText.forEach(item => {
  //   empObj[item.dataset.id] = item.value
  // })

  appState.currentPage = appState.currentPage + 1
  appState.software = empObj
  setTimeout(() => {
    loading.style.display = "none"
  }, 500);
  page3.style.display = "none"
  // page3.style.display = "block"
  console.log(appState, "APP 3!!!")
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