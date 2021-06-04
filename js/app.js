const fetchApi = async () =>{
    const res = await  axios.get("https://api.whale-alert.io/v1/transaction/ethereum/0x0015286d8642f0e0553b7fefa1c168787ae71173cbf82ec2f2a1b2e0ffee72b2?api_key=KpEf8AfgCDv5Tylzjr0pMInnKipPQ6pa");
    console.log(res);
}
fetchApi();