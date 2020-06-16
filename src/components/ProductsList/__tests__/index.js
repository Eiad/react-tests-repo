import React from "react";
import renderer from "react-test-renderer";

import ProductsList from "../index";
import Products from "../../../models/Products";

describe("ProductsList", () => {
  test("snapshot renders", done => {
    Products.all().then(products => {
      const component = renderer.create(<ProductsList data={products} />);

      const tree = component.toJSON();

      expect(tree).toMatchSnapshot();

      done();
    });
  });
});
