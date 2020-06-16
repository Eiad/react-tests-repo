import axios from "axios";

const Products = {
  all: () => {
    return axios.get("/data/shirtsData.json").then(result => {
      return result.data;
    });
  }
};

export default Products;
