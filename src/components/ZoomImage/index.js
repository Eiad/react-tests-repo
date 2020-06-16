import React from "react";
import Zoom from "react-medium-image-zoom";

import "react-medium-image-zoom/dist/styles.css";

const ZoomImage = ({ src = "", alt = "" }) => {
  return (
    <Zoom>
      <img alt={alt} src={src} />
    </Zoom>
  );
};

export default ZoomImage;
