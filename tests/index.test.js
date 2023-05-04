import { say } from '../src/index'

test('can say hello', () => {
    expect(say('Hello!')).toEqual('Hello!')
})
