FROM node

WORKDIR /usr/src/app

COPY package*.json ./

COPY . .

RUN npm install

EXPOSE 3031:3030

ENV DATABASE_URL=xplore.cb3sgsj6hke0.us-east-2.rds.amazonaws.com


CMD [ "npm", "start" ]

