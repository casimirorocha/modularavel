export const toArray = (params) => {
   return params.split(',').map(x => x.trim());
}
