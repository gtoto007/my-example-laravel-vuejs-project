import{v as l,g as m,w as t,o as d,a,u as o,X as c,b as e,i as u,n as p,d as f}from"./app-17b7d09f.js";import{_}from"./GuestLayout-b85fb4f2.js";import{_ as w,a as b,b as g}from"./TextInput-864c614c.js";import{P as h}from"./PrimaryButton-327a29b8.js";import"./_plugin-vue_export-helper-c27b6911.js";const x=e("div",{class:"mb-4 text-sm text-gray-600"}," This is a secure area of the application. Please confirm your password before continuing. ",-1),v=["onSubmit"],y={class:"flex justify-end mt-4"},S={__name:"ConfirmPassword",setup(P){const s=l({password:""}),i=()=>{s.post(route("password.confirm"),{onFinish:()=>s.reset()})};return(V,r)=>(d(),m(_,null,{default:t(()=>[a(o(c),{title:"Confirm Password"}),x,e("form",{onSubmit:f(i,["prevent"])},[e("div",null,[a(w,{for:"password",value:"Password"}),a(b,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:o(s).password,"onUpdate:modelValue":r[0]||(r[0]=n=>o(s).password=n),required:"",autocomplete:"current-password",autofocus:""},null,8,["modelValue"]),a(g,{class:"mt-2",message:o(s).errors.password},null,8,["message"])]),e("div",y,[a(h,{class:p(["ml-4",{"opacity-25":o(s).processing}]),disabled:o(s).processing},{default:t(()=>[u(" Confirm ")]),_:1},8,["class","disabled"])])],40,v)]),_:1}))}};export{S as default};
