export const config = {
  runtime: 'edge',
}

export default async function GET(request) {
  return new Response('Hello, Next.js!')
}
