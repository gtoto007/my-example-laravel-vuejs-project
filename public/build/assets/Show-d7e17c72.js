import{c as i,a as o,w as r,b as e,d as u,e as b,f as c,F as g,o as p,i as d,t as m}from"./app-17b7d09f.js";import{M as f,S as y}from"./MyTitle-32a965df.js";import"./_plugin-vue_export-helper-c27b6911.js";const _={class:"font-bold underline"},x={class:"mt-5 max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md"},v={class:"grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2"},w=e("label",{class:"text-gray-700",for:"first_name"},"Nome",-1),h=["value"],S=e("label",{class:"text-gray-700",for:"surname"},"Cognome",-1),k=["value"],N=e("label",{class:"text-gray-700",for:"emailAddress"},"Email",-1),M=["value"],T=e("label",{class:"text-gray-700",for:"telephone"},"Telefono",-1),V=["value"],B=e("label",{class:"text-gray-700",for:"note"},"Note",-1),F={__name:"Show",props:{status:{type:String},first_name:{type:String},last_name:{type:String},phone:{type:String},notes:{type:String},email:{type:String}},setup(n){const t=n;return(a,l)=>(p(),i(g,null,[o(f,{class:"text-center"},{default:r(()=>[d("Grazie per aver inviato la tua candidatura")]),_:1}),o(y,{class:"text-center"},{default:r(()=>[d("Stato: "),e("span",_,m(t.status),1)]),_:1}),e("section",x,[e("form",{onSubmit:l[1]||(l[1]=u((...s)=>a.submit&&a.submit(...s),["prevent"]))},[e("div",v,[e("div",null,[w,e("input",{type:"text",id:"disabled-input","aria-label":"disabled input",class:"mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed",value:t.first_name,disabled:""},null,8,h)]),e("div",null,[S,e("input",{type:"text","aria-label":"disabled input",class:"mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed",value:t.last_name,disabled:""},null,8,k)]),e("div",null,[N,e("input",{type:"text","aria-label":"disabled input",class:"mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed",value:t.email,disabled:""},null,8,M)]),e("div",null,[T,e("input",{type:"text","aria-label":"disabled input",class:"mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed",value:t.phone,disabled:""},null,8,V)])]),e("div",null,[B,b(e("textarea",{id:"notes",name:"notes",type:"text",rows:"6","onUpdate:modelValue":l[0]||(l[0]=s=>t.notes=s),class:"mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed",disabled:""},null,512),[[c,t.notes]])])],32)])],64))}};export{F as default};
