const x = document.getElementById("x");
const y = document.getElementById("y");
const form = document.querySelector("form");

form.addEventListener("submit", async (e) => {

         e.preventDefault();

    const x = document.querySelector("#x").value;
    const y = document.querySelector("#y").value;
    const data = await fetchApi1(x,y);

   document.querySelector("#result").innerHTML= data.answer;
           
    async function fetchApi1(x,y) {

        const url = "./myapi.php" ;
        const formData= new FormData();
        formData.set('x',x);
        formData.set('y',y);
        
        const dataFetch = await fetch(url, {
            method: "POST",
            body: formData,
            headers: {
                accept: "application/json"
            },
        })
       const data = await dataFetch.json();

        return data;
    }
})



    //Api 2

    const btn2 = document.querySelector("#btn2");

btn2.addEventListener("submit", async (e) => {
    e.preventDefault();
    
    const string = document.getElementById("string").value;
    const data = await fetchApi2(string);

    document.querySelector("#palindrom").innerHTML = data.string;
    console.log(data.string);
        

async function fetchApi2(string) {
    const url = "./myapi2.php";
    const formData = new FormData();
    formData.set('string', string);
    const dataFetch = await fetch(url, {
        method: "POST",
        body: formData,
        headers: {
            accept: "application/json"
        },
    })
    const data = await dataFetch.json();
    return data;

}

})
//Api 3


const btn3= document.querySelector("#btn3");
const text1= document.getElementById("text1");
const text2= document.getElementById("text2");

btn3.addEventListener("submit", async (e) => {
    e.preventDefault();
    const string = document.getElementById("text1").value;
    const data = await fetchApi3(string);

document.querySelector("#text2").innerHTML= data.string;
    

async function fetchApi3(string) {
   const url = "./myapi3.php" ;
   const formData= new FormData();
   formData.set('string',string);
   const dataFetch = await fetch(url, {
       method: "POST",
       body: formData,
       headers: {
           accept: "application/json"
       },
   })
  const data = await dataFetch.json();

   return data;

}

})


//Api4


const btn4= document.querySelector("#btn4");


btn4.addEventListener("submit", async (e) => {
    e.preventDefault();
    const string = document.getElementById("password").value;
    
    const data = await fetchApi4(string);
    
    document.querySelector("#text").innerHTML= data.string;

      })
async function fetchApi4(string) {

   const url = "./myapi4.php" ;
   const formData= new FormData();
   formData.set('string',string);

   const dataFetch = await fetch(url, {
       method: "POST",
       body: formData,
       headers: {
           accept: "application/json"
       },
   })
   
  const data = await dataFetch.json();
  console.log(data);
   return data;

}


