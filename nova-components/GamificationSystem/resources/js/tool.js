Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'gamification-system',
      path: '/gamification-system',
      component: require('./components/Classroom'),
    },
  ])
})
