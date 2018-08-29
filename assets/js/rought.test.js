let doFirst = () => {
    return new Promise((resolve, reject) => {
        resolve('From doFirst function. ');
    })
}

let doSecond = (msg) => {
    return new Promise((resolve, reject) => {
        resolve(msg + ' From doSecond function. ');
    })
}

let doLast = (msg) => {
    return new Promise((resolve, reject) => {
        resolve(msg + 'From doLast function. ')
    })
}

doFirst().then((result) => {
    return doSecond(result);
}).then((result) => {
    return doLast(result);
}).then((result) => {
    console.log('All done. ' + result)
});