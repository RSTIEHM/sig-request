let registerForm = document.querySelector("#register-form")
let inputs = document.querySelectorAll(".input-text")
let page1Next = document.querySelector("#page-1-next");
let page2Next = document.querySelector("#page-2-next");
let page3Next = document.querySelector("#page-3-next");
let page1 = document.querySelector(".page-1")
let page2 = document.querySelector(".page-2")
let page3 = document.querySelector(".page-3")
let page4 = document.querySelector(".page-4")
let loading = document.querySelector(".loading")
let appState = {
  currentPage: 1,
  employee: {}
}

const loadSummaryPage = (obj) => {
  // GATHER INFO CATEGORY 
  let employeeInfo = obj.employee
  let techTel = obj.tech
  let softwareEmail = obj.software
  console.log(employeeInfo, techTel, softwareEmail)
  loadEmployeeSummary(employeeInfo)
  loadTechSoftwareSummary(techTel, ".tech-summary-col", "tech")
  loadTechSoftwareSummary(softwareEmail, ".software-summary-col", "software")
}

const loadEmployeeSummary = (empObj) => {
  let summary = document.querySelector(".employee-summary-col")
  let html = `
   <h3 class="heading-white-lg text-center">Employee Info</h3>
   <p class="line-item">${empObj.employeeName} </p>
   <p class="line-item">Department - ${empObj.department}</p>
   <p class="line-item">Action Date - ${empObj.actionDate}</p>
  `
  summary.innerHTML = html
}

const loadTechSoftwareSummary = (obj, cls, type) => {
  let summary = document.querySelector(cls)
  let html
  let p
  if(type === "software") {
    html = `
   <h3 class="heading-white-lg text-center">Software</h3>
   <div class="software-wrap">
  `
    for (const key in obj) {
      let p = `<p class="line-item">${key} - ${obj[key]}<span class="span-hide">C</span></p>`
      html += p
    }
    html+= `<div>`
  } else {
    html = `
   <h3 class="heading-white-lg text-center">Tech</h3>
  ` 
    for (const key in obj) {
      let p = `<p class="line-item">${key} - ${obj[key]}</p>`
      html += p
    }
  }


  summary.innerHTML = html
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
  //===
  let empComputer = document.querySelectorAll(".emp-computer")
  let empComputerText = document.querySelectorAll(".comp-input-text")
  //=====

  empComputer.forEach(item => {
    if (item.type === 'checkbox' && item.checked) {
      empObj[item.name] = "Yes"
    }
  })

  empComputerText.forEach(item => {
    empObj[item.dataset.id] = item.value
  })

  //==========
  appState.currentPage = appState.currentPage + 1
  appState.tech = empObj
  //==========
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
  let additionalEmails = document.querySelector(".page-3-email-input")
  let empSoftware = document.querySelectorAll(".emp-software")

  if(additionalEmails.value != "") {
    empObj[additionalEmails.name] = additionalEmails.value
  }
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


  appState.currentPage = appState.currentPage + 1
  appState.software = empObj
  setTimeout(() => {
    loading.style.display = "none"
  }, 500);

  // 
  loadSummaryPage(appState)
  page3.style.display = "none"
  page4.style.display = "block"
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